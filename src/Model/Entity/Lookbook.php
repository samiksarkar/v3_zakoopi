<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lookbook Entity.
 */
class Lookbook extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'user_id' => true,
        'tags' => true,
        'status' => true,
        'timesstamp' => true,
        'lookbookcomment_count' => true,
        'lookbooklike_count' => true,
        'view_count' => true,
        'cards' => true,
        'lookbookcomments' => true,
        'lookbooklikes' => true,
        'users' => true,
    ];
}
