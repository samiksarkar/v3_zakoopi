<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Card Entity.
 */
class Card extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'photo_path' => true,
        'lookbook_id' => true,
        'description' => true,
        'timestamp' => true,
        'status' => true,
        'lookbook' => true,
    ];
}
