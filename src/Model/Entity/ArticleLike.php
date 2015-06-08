<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticleLike Entity.
 */
class ArticleLike extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'article_id' => true,
        'user_id' => true,
        'timestamp' => true,
        'article' => true,
        'user' => true,
    ];
}
