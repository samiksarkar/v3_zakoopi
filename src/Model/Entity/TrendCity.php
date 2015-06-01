<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrendCity Entity.
 */
class TrendCity extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_id' => true,
        'trend_id' => true,
        'sort_order' => true,
        'city' => true,
        'trend' => true,
    ];
}
