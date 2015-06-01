<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Geocode Entity.
 */
class Geocode extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'place' => true,
        'lat' => true,
        'lng' => true,
    ];
}
