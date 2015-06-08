<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TeamUser Entity.
 */
class TeamUser extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'team_id' => true,
        'timestamp' => true,
        'user' => true,
        'team' => true,
    ];
}
