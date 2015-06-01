<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SaleTownStore Entity.
 */
class SaleTownStore extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_id' => true,
        'store_id' => true,
        'store_name' => true,
        'store_slug' => true,
        'cover_photo' => true,
        'created_date' => true,
        'modified_date' => true,
        'status' => true,
        'city' => true,
        'store' => true,
    ];
}
