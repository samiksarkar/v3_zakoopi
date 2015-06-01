<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreCard Entity.
 */
class StoreCard extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_id' => true,
        'card_id' => true,
        'store' => true,
        'card' => true,
    ];
}
