<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enquiry Entity.
 */
class Enquiry extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_name' => true,
        'customer_name' => true,
        'contact_number' => true,
        'contact_time' => true,
        'store_address' => true,
        'isOwner' => true,
    ];
}
