<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreOfferingsFabric Entity.
 */
class StoreOfferingsFabric extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_offering_id' => true,
        'fabric_id' => true,
        'store_offering' => true,
        'fabric' => true,
    ];
}
