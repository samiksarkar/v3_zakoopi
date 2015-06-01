<?php
namespace App\Model\Table;

use App\Model\Entity\SaleTownDeal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SaleTownDeals Model
 */
class SaleTownDealsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('sale_town_deals');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('market_name', 'create')
            ->notEmpty('market_name');
            
        $validator
            ->requirePresence('punch_one', 'create')
            ->notEmpty('punch_one');
            
        $validator
            ->requirePresence('punch_two', 'create')
            ->notEmpty('punch_two');
            
        $validator
            ->requirePresence('store_cover', 'create')
            ->notEmpty('store_cover');
            
        $validator
            ->requirePresence('conditions', 'create')
            ->notEmpty('conditions');
            
        $validator
            ->add('deal_date', 'valid', ['rule' => 'date'])
            ->requirePresence('deal_date', 'create')
            ->notEmpty('deal_date');
            
        $validator
            ->add('created_date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('created_date', 'create')
            ->notEmpty('created_date');
            
        $validator
            ->add('modified_date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('modified_date', 'create')
            ->notEmpty('modified_date');
            
        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['store_id'], 'Stores'));
        return $rules;
    }
}
