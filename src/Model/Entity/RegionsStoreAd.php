<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegionsStoreAd Entity.
 */
class RegionsStoreAd extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_ad_id' => true,
        'region_id' => true,
        'store_ad' => true,
        'region' => true,
    ];
}
