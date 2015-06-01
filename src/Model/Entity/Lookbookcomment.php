<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lookbookcomment Entity.
 */
class Lookbookcomment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'lookbook_id' => true,
        'user_id' => true,
        'comment' => true,
        'timestamp' => true,
        'status' => true,
        'lookbook' => true,
        'user' => true,
    ];
}
