<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Occasion Entity.
 */
class Occasion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'occasion' => true,
        'offerings' => true,
    ];
}
