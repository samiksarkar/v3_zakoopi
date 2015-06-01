<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StoreReview Entity.
 */
class StoreReview extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'store_id' => true,
        'review' => true,
        'istrending' => true,
        'created_date' => true,
        'user' => true,
        'store' => true,
    ];
}
