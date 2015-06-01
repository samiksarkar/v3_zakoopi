<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReportError Entity.
 */
class ReportError extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_id' => true,
        'user_id' => true,
        'error_subject' => true,
        'error_msg' => true,
        'store' => true,
        'user' => true,
    ];
}
