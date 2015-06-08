<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreLike Entity.
 */
class StoreLike extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_id' => true,
        'user_id' => true,
        'timestamp' => true,
        'store' => true,
        'user' => true,
    ];
}
