<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity.
 */
class Article extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_id' => true,
        'title' => true,
        'slug' => true,
        'description' => true,
        'summary' => true,
        'tags' => true,
        'status' => true,
        'sponsored' => true,
        'trending' => true,
        'hits' => true,
        'sort' => true,
        'createdBy' => true,
        'approved' => true,
        'modifiedBy' => true,
        'city' => true,
        'article_hits' => true,
        'article_images' => true,
        'article_stores' => true,
        'users' => true
    ];
    protected $_virtual = [
      'likes_count'  
    ];
    protected function _getLikesCount(){
        $likes = \Cake\ORM\TableRegistry::get('ArticleLikes');
        $likeCnt = $likes->find()->where(['article_id' => $this->_properties['id']])->count();
        return $likeCnt;
    }
}
