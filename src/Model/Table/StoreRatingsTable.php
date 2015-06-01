<?php
namespace App\Model\Table;

use App\Model\Entity\StoreRating;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StoreRatings Model
 */
class StoreRatingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('store_ratings');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('CounterCache', ['Stores' => ['store_rating_count']]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
            'joinType' => 'INNER'
        ]);
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
            ->add('cost', 'valid', ['rule' => 'numeric'])
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');
            
        $validator
            ->add('style', 'valid', ['rule' => 'numeric'])
            ->requirePresence('style', 'create')
            ->notEmpty('style');
            
        $validator
            ->add('fabric', 'valid', ['rule' => 'numeric'])
            ->requirePresence('fabric', 'create')
            ->notEmpty('fabric');
            
        $validator
            ->add('finesse', 'valid', ['rule' => 'numeric'])
            ->requirePresence('finesse', 'create')
            ->notEmpty('finesse');
            
        $validator
            ->requirePresence('created_date', 'create')
            ->notEmpty('created_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['store_id'], 'Stores'));
        return $rules;
    }
}
