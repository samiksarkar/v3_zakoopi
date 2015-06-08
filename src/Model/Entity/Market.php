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
    protected function _setMarketName($marketname){
        $cities = \Cake\ORM\TableRegistry::get('Cities');
        $city = $cities->find()->where(['id'=>  $this->_properties['city_id']])->first();
        $slug = strtolower(\Cake\Utility\Inflector::slug($city->city_name ."-".$marketname));
        $this->set('url_slug',$slug);
        return $marketname;
    }
}
