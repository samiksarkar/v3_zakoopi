<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreRating Entity.
 */
class StoreRating extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'store_id' => true,
        'cost' => true,
        'style' => true,
        'fabric' => true,
        'finesse' => true,
        'created_date' => true,
        'user' => true,
        'store' => true,
    ];
}
