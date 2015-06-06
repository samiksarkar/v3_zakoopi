<?php
namespace App\Model\Table;

use App\Model\Entity\FeedPopular;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FeedPopular Model
 */
class FeedPopularTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('feed_popular');
        $this->displayField('id');
        $this->primaryKey('id');
        //$this->add
    }
    
    
    
    

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->add('key', 'valid', ['rule' => 'numeric'])
            ->requirePresence('key', 'create')
            ->notEmpty('key');
            
        $validator
            ->requirePresence('model', 'create')
            ->notEmpty('model');
            
        $validator
            ->add('order', 'valid', ['rule' => 'numeric'])
            ->requirePresence('order', 'create')
            ->notEmpty('order');
            
        $validator
            ->add('timestamp', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('timestamp');

        return $validator;
    }
}
