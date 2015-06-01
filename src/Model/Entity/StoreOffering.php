<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreOffering Entity.
 */
class StoreOffering extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_id' => true,
        'offering_id' => true,
        'price_range_from' => true,
        'price_range_to' => true,
        'customization_possible' => true,
        'customization_days' => true,
        'store' => true,
        'offering' => true,
        'fabrics' => true,
        'styles' => true,
    ];
}
