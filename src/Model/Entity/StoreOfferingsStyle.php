<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreOfferingsStyle Entity.
 */
class StoreOfferingsStyle extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_offering_id' => true,
        'style_id' => true,
        'store_offering' => true,
        'style' => true,
    ];
}
