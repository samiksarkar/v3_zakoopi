<?php
namespace App\Model\Table;

use App\Model\Entity\FeedRecent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FeedRecent Model
 */
class FeedRecentTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('feed_recent');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('order');
            
        $validator
            ->add('timestamp', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('timestamp');

        return $validator;
    }
}
