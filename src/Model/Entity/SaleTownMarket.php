<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SaleTownMarket Entity.
 */
class SaleTownMarket extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_id' => true,
        'market_id' => true,
        'cover_photo' => true,
        'created_date' => true,
        'modified_date' => true,
        'status' => true,
        'city' => true,
        'market' => true,
    ];
}
