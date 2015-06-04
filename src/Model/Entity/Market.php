<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Market Entity.
 */
class Market extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_id' => true,
        'market_name' => true,
        'city' => true,
        'img' => true,
        'picture' => true  //virtual Field for file
    ];
}
