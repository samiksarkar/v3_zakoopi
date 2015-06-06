<?php

namespace App\Model\Behavior;

use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\Utility\Inflector;

class UploadBehavior extends Behavior {
    
    private $field = 'img';
    private $imageQuality = 80;
    private $config = [
//        'Markets' => [
//            'sizes' => [
//                '220x0' => [220, 0],
//                '40x0' => [40, 0],
//            ],
//            'dirPattern' => "{WWW_ROOT}uploads{DS}markets{DS}", // http://v3.zakoopi.com/uploads/markets/ + name + -size.jpg
//            'slugColumn' => "market_name"
//        ]
    ];
        
    
    public function initialize(array $config) {
        parent::initialize($config);
        $this->imageQuality = $config['imageQuality'];
        $this->field = $config['uploadField'];
        $this->config = $config['config'];
    }

    
    

    /**
     * Send like "{WWW_ROOT}uploads{DS}markets{DS}" and it will return like "D:\project\webroot\uploads\markets"
     * @param string $path
     * @return string
     */
    private function _buildPath($path = null) {
        $replacements = [
            '{WWW_ROOT}' => ROOT . DIRECTORY_SEPARATOR . 'webroot' . DIRECTORY_SEPARATOR,
            '{DS}' => DIRECTORY_SEPARATOR,
            '//' => DIRECTORY_SEPARATOR,
            '/' => DIRECTORY_SEPARATOR,
            '\\' => DIRECTORY_SEPARATOR,
        ];

        $builtPath = str_replace(array_keys($replacements), array_values($replacements), $path);
        return $builtPath;
    }

    private function _buildSlug(\Cake\ORM\Entity $entity) {
        $slugColumn = $this->config[$entity->source()]['slugColumn'];
        $value = $entity->get($slugColumn);
        $value = Inflector::slug($value);
        return strtolower($value);
    }

    private function scaleImageJpeg($imgPath,  \Cake\ORM\Entity $entity) {
        if (!is_file($imgPath)) {
            return false;
        }
        $img = new \Imagick($imgPath);
        foreach($this->config[$entity->source()]['sizes'] as $k => $v){
            $newIm = $img->clone();
            $newIm->scaleimage($v[0], $v[1]);
            $newIm->setcompressionquality($this->imageQuality);
            $newIm->setformat('jpg');
            $newIm->writeimage(rtrim($imgPath, ".jpg")."-".$k.".jpg");
        }
        return true;
        //$img->
    }

    

    public function beforeSave(Event $event, \Cake\ORM\Entity $entity) {
        $tstamp = time();
        $field = $this->field;
        if ($entity->picture['error'] == 0) {
            if (isset($entity->id)) {
                foreach ($this->config[$entity->source()]['sizes'] as $k => $v) {
                    @unlink($this->_buildPath($this->config[$entity->source()]['dirPattern'] . $entity->get($field) . ".jpg"));
                    $filename = $this->_buildPath($this->config[$entity->source()]['dirPattern'] . $entity->get($field) ."-". $k . ".jpg");
                    @unlink($filename);
                }
            }
            $OrignalName = $this->_buildSlug($entity) ."-". $tstamp;
            $destination = $this->_buildPath($this->config[$entity->source()]['dirPattern'] . $OrignalName . ".jpg");
            if(move_uploaded_file($entity->get('file_'.$field)['tmp_name'], $destination)){
                $entity->set($field, $OrignalName);
                $this->scaleImageJpeg($destination,$entity); 
            }
        }
    }
    public function beforeDelete(Event $event, \Cake\ORM\Entity $entity){
        $field = $this->field;
        foreach ($this->config[$entity->source()]['sizes'] as $k => $v) {
            @unlink($this->_buildPath($this->config[$entity->source()]['dirPattern'] . $entity->get($field) . ".jpg"));
            $filename = $this->_buildPath($this->config[$entity->source()]['dirPattern'] . $entity->get($field) ."-". $k . ".jpg");
            @unlink($filename);
        }
    }

}
