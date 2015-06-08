<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'first_name' => true,
        'last_name' => true,
        'password' => true,
        'age' => true,
        'gender' => true,
        'location' => true,
        'created_on' => true,
        'roles' => true,
        'isArticleUser' => true,
        'isExpertUser' => true,
        'uid' => true,
        'is_active' => true,
        'img' => true,
        'badge' => true,
        'fb_link' => true,
        'twitter_link' => true,
        'google_link' => true,
        'other_website' => true,
        'about' => true,
        'pass_hash' => true,
        'article_hits' => true,
        'lookbookcomments' => true,
        'lookbooklikes' => true,
        'lookbooks' => true,
        'report_errors' => true,
        'store_ratings' => true,
        'store_reviews' => true,
        'user_checkins' => true,
        'user_favourites' => true,
    ];
    
    /**
     * Hash Passwords 
     */
    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
    
    protected $_virtual = [
        'android_api_img'
    ];
    protected function _getAndroidApiImg($img){
        return \Cake\Routing\Router::url('/uploads/profile_pics/'.$this->_properties['img'],true);
    }
    
}
