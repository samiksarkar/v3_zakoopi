<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lookbooklike Entity.
 */
class Lookbooklike extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'lookbook_id' => true,
        'user_id' => true,
        'timestamp' => true,
        'lookbook' => true,
        'user' => true,
    ];
}
