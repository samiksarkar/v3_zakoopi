<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdsSetting Entity.
 */
class AdsSetting extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ad_type' => true,
        'settings' => true,
    ];
}
