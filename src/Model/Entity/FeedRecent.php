<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FeedRecent Entity.
 */
class FeedRecent extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'key' => true,
        'model' => true,
        'order' => true,
        'timestamp' => true,
    ];
    
    protected $_virtual = [
        'articleData',
        'lookbookData',
        'storeReviewData',
        'teamData'
    ];


    protected function _getModel(){
        $table = \Cake\ORM\TableRegistry::get($this->_properties['model']);
        if($this->_properties['model'] == 'Articles'){
            $result = $table->find()->contain(['Cities','Users','ArticleImages'])->where(['Articles.id'=>$this->_properties['key']])->first();
            $this->_virtual[] = 'articleData';
            $this->set('articleData', $result);
        }elseif($this->_properties['model'] == 'Lookbooks'){
            $result = $table->find()->contain(['Cards','Users'])->where(['Lookbooks.id'=>$this->_properties['key']])->first();
            $this->_virtual[] = 'lookbookData';
            $this->set('lookbookData', $result);
        }elseif($this->_properties['model'] == 'StoreReviews'){
            $result = $table->find()->contain(['Users','Stores','Stores.StoreImages'])->where(['StoreReviews.id'=>$this->_properties['key']])->first();
            $this->_virtual[] = 'storeReviewData';
            $this->set('storeReviewData', $result);
        }else{
            $result = $table->find()->where([$this->_properties['model'].'.id'=>$this->_properties['key']])->first();
            $this->_virtual[] = 'teamData';
            $this->set('teamData', $result);
        }
        return $this->_properties['model'];// $result;
    }
}
