<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FeedPopular Entity.
 */
class FeedPopular extends Entity
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
        'timestamp' => true
    ];
    protected $_virtual = [
        'data'
    ];
    
    protected function _getData(){
        $table = \Cake\ORM\TableRegistry::get($this->_properties['model']);
        if($this->_properties['model'] == 'Stores'){
            $result = $table->find()->contain(['StoreImages'])->where(['id'=>$this->_properties['key']])->first();
        }elseif($this->_properties['model'] == 'Lookbooks'){
            $result = $table->find()->contain(['LookbookComments','LookbookLikes','Cards'])->where(['id'=>$this->_properties['key']])->first();
        }else{
            $result = $table->find()->where(['id'=>$this->_properties['key']])->first();
        }
        
        return $result;
    }
    
}
