<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreImage Entity.
 */
class StoreImage extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'store_id' => true,
        'desc' => true,
        'store' => true,
    ];
    protected $_virtual = [
        'android_api_img'
    ];
    protected function _getAndroidApiImg($img){
        return \Cake\Routing\Router::url('/uploads/stores/store_'.$this->_properties['store_id']."/".$this->_properties['name'],true);
    }
    
    
}
