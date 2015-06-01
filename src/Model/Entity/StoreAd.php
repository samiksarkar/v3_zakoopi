<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreAd Entity.
 */
class StoreAd extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'type' => true,
        'status' => true,
        'tagline' => true,
        'rate_of_ad' => true,
        'redirectto' => true,
        'store_id' => true,
        'keywords' => true,
        'image' => true,
        'store' => true,
        'regions' => true,
    ];
}
