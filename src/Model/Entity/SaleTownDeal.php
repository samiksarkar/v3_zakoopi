<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SaleTownDeal Entity.
 */
class SaleTownDeal extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_id' => true,
        'market_name' => true,
        'punch_one' => true,
        'punch_two' => true,
        'store_cover' => true,
        'conditions' => true,
        'deal_date' => true,
        'created_date' => true,
        'modified_date' => true,
        'status' => true,
        'store' => true,
    ];
}
