<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserCheckin Entity.
 */
class UserCheckin extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'store_id' => true,
        'user' => true,
        'store' => true,
    ];
}
