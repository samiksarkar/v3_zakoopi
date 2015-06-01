<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Loginhit Entity.
 */
class Loginhit extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'hit' => true,
        'log_hit' => true,
    ];
}
