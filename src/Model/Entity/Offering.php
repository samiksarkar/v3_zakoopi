<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offering Entity.
 */
class Offering extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'gender' => true,
        'category' => true,
        'timestamp' => true,
        'occasions' => true,
    ];
}
