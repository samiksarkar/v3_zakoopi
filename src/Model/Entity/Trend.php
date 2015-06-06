<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trend Entity.
 */
class Trend extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'trend_name' => true,
        'city_id' => true,
        'city' => true,
        'trend_cities' => true,
        'trend_offerings' => true,
        'img' => true,
        'file_img' => true //virtual Field for file
    ];
}
