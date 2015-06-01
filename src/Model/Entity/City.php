<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * City Entity.
 */
class City extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_name' => true,
        'articles' => true,
        'articles_sorttrendings' => true,
        'markets' => true,
        'sale_town_markets' => true,
        'sale_town_stores' => true,
        'stores' => true,
        'synonyms' => true,
        'trends' => true,
    ];
}
