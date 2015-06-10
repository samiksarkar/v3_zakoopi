<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Market Entity.
 */
class Market extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    
    protected $_accessible = [
        'city_id' => true,
        'market_name' => true,
        'city' => true,
        'img' => true,
        'url_slug' => true,
        'file_img' => true  //virtual Field for file
    ];
    
    protected function _setCityId($city_id){
        $cities = \Cake\ORM\TableRegistry::get('Cities');
        $city = $cities->find()->where(['id'=>  $city_id])->first();
       
        $slug = strtolower(\Cake\Utility\Inflector::slug($city->city_name ."-".$this->_properties['market_name']));
        $this->set('url_slug',$slug);
        return $city_id;
    }
    
    protected function _setMarketName($marketname){
       
        return $marketname;
    }
}
