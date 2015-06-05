<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Crop Controller
 *
 * @property \App\Model\Table\MarketsTable $Markets
 */
class CropController extends AppController{
    
    private $config = [
        'Markets' => [
            'sizes' => [
                '220x0' => [220, 0],
                '40x0' => [40, 0],
//                '0x65' => [0, 65]
            ],
            'dirPattern' => "{WWW_ROOT}uploads{DS}markets{DS}", // http://v3.zakoopi.com/uploads/markets/ + name + -size.jpg
            'slugColumn' => "market_name"
        ]
    ];
    private $field = 'img';
    private $imageQuality = 80;
    
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
    
    public function index(){
        if($this->request->is(['post'])){
            $d = $this->request->data;
            $field = @$d['field'] != '' ? $d['field'] : $this->field;
            $this->field = $field;
            
            $table = \Cake\ORM\TableRegistry::get($d['entity']);
            $table = $table->find()->where(['id' => $d['id']])->first()->toArray();
            
            $pth = $this->_buildPath($path = $this->config[$d['entity']]['dirPattern'] . $table[$field] . '.jpg');
            $im = new \Imagick($pth);
            $im->scaleimage(570, 0);
            $im->cropimage($d['crop']['width'], $d['crop']['height'], $d['crop']['left'], $d['crop']['top']);
            $im->setcompressionquality($this->imageQuality);
            $im->setformat('jpg');
            $im->writeimage($pth);
            
            foreach($this->config[$d['entity']]['sizes'] as $k => $v ){
                $path = $this->_buildPath($path = $this->config[$d['entity']]['dirPattern'] . $table[$field] . '-' . $k . '.jpg');
                $newIm = $im->clone();
                $newIm->scaleimage($v[0], $v[1]);
                $newIm->setcompressionquality($this->imageQuality);
                $newIm->setformat('jpg');
                $newIm->writeimage($path);
            }
            print_r($d);
            exit;
        }
    }
    
}
