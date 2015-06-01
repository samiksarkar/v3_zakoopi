<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Brand Entity.
 */
class Brand extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'brand_name' => true,
        'logo_path' => true,
        'status' => true,
        'stores' => true,
    ];
}
