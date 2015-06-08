<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity.
 */
class Team extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'timestamp' => true,
        'hits' => true,
        'img' => true,
        'team_likes' => true,
        'team_users' => true,
    ];
}
