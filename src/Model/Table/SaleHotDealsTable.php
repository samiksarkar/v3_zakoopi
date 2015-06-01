<?php
namespace App\Model\Table;

use App\Model\Entity\SaleHotDeal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SaleHotDeals Model
 */
class SaleHotDealsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('sale_hot_deals');
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
            ->requirePresence('store_name', 'create')
            ->notEmpty('store_name');
            
        $validator
            ->requirePresence('sale_amount', 'create')
            ->notEmpty('sale_amount');
            
        $validator
            ->requirePresence('sale_description', 'create')
            ->notEmpty('sale_description');
            
        $validator
            ->requirePresence('cover_photo', 'create')
            ->notEmpty('cover_photo');
            
        $validator
            ->requirePresence('voucher_photo', 'create')
            ->notEmpty('voucher_photo');
            
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
            
        $validator
            ->add('voucher_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('voucher_count', 'create')
            ->notEmpty('voucher_count');

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
