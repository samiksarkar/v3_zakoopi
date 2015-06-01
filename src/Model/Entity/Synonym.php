<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Synonym Entity.
 */
class Synonym extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_id' => true,
        'synonym_name' => true,
        'city' => true,
    ];
}
