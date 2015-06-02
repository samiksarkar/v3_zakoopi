<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AppDownload Entity.
 */
class AppDownload extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'uuid' => true,
        'first_started_at' => true,
        'last_started_at' => true,
        'version' => true,
        'visit_count' => true,
    ];
}
