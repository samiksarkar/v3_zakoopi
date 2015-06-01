<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrendOffering Entity.
 */
class TrendOffering extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'trend_id' => true,
        'offering_id' => true,
        'trend' => true,
        'offering' => true,
    ];
}
