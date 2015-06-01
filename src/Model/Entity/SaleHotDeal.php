<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SaleHotDeal Entity.
 */
class SaleHotDeal extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_id' => true,
        'store_name' => true,
        'sale_amount' => true,
        'sale_description' => true,
        'cover_photo' => true,
        'voucher_photo' => true,
        'created_date' => true,
        'modified_date' => true,
        'status' => true,
        'voucher_count' => true,
        'store' => true,
    ];
}
