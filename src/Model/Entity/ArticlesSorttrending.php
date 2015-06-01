<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticlesSorttrending Entity.
 */
class ArticlesSorttrending extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'city_id' => true,
        'article_id' => true,
        'sort_order' => true,
        'city' => true,
        'article' => true,
    ];
}
