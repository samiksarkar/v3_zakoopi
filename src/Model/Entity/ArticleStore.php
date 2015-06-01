<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticleStore Entity.
 */
class ArticleStore extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'article_id' => true,
        'store_id' => true,
        'name' => true,
        'review' => true,
        'article' => true,
        'store' => true,
    ];
}
