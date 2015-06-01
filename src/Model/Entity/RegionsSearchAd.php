<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegionsSearchAd Entity.
 */
class RegionsSearchAd extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'search_ad_id' => true,
        'region_id' => true,
        'search_ad' => true,
        'region' => true,
    ];
}
