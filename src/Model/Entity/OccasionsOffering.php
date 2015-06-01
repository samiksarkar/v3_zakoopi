<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OccasionsOffering Entity.
 */
class OccasionsOffering extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'occasion_id' => true,
        'offering_id' => true,
        'occasion' => true,
        'offering' => true,
    ];
}
