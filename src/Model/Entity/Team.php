<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity.
 */
class Team extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'timestamp' => true,
        'hits' => true,
        'img' => true,
        'team_likes' => true,
        'team_users' => true,
        'file_img' => true,
    ];
    protected $_virtual = [
        'likes_count',
        'android_api_img'
    ];
    
    protected function _getLikesCount(){
        $likes = \Cake\ORM\TableRegistry::get('TeamLikes');
        return $likes->find()->where(['TeamLikes.team_id' => $this->_properties['id']])->count();
        
    }
    protected function _getAndroidApiImg($img){
        return \Cake\Routing\Router::url('/uploads/teams/'.$this->_properties['img']."-720x0.jpg",true);
    }
}
