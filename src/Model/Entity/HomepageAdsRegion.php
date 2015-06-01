<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HomepageAdsRegion Entity.
 */
class HomepageAdsRegion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'homepage_ad_id' => true,
        'region_id' => true,
        'homepage_ad' => true,
        'region' => true,
    ];
}
