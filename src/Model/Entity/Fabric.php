<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fabric Entity.
 */
class Fabric extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'is_visible' => true,
        'store_offerings' => true,
    ];
}
