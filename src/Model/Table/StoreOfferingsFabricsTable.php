<?php
namespace App\Model\Table;

use App\Model\Entity\StoreOfferingsFabric;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StoreOfferingsFabrics Model
 */
class StoreOfferingsFabricsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('store_offerings_fabrics');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('StoreOfferings', [
            'foreignKey' => 'store_offering_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fabrics', [
            'foreignKey' => 'fabric_id',
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
        $rules->add($rules->existsIn(['store_offering_id'], 'StoreOfferings'));
        $rules->add($rules->existsIn(['fabric_id'], 'Fabrics'));
        return $rules;
    }
}
