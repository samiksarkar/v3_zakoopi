<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticleImage Entity.
 */
class ArticleImage extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'article_id' => true,
        'name' => true,
        'coverPhoto' => true,
        'title' => true,
        'url' => true,
        'article' => true,
    ];
    protected $_virtual = [
        'android_api_img'
    ];
    protected function _getAndroidApiImg($img){
        return \Cake\Routing\Router::url('/uploads/articles/original/'.$this->_properties['name'],true);
    }
}
