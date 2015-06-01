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
}
