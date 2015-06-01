<?php
namespace App\Model\Table;

use App\Model\Entity\StoreOffering;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StoreOfferings Model
 */
class StoreOfferingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('store_offerings');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Offerings', [
            'foreignKey' => 'offering_id'
        ]);
        $this->belongsToMany('Fabrics', [
            'foreignKey' => 'store_offering_id',
            'targetForeignKey' => 'fabric_id',
            'joinTable' => 'store_offerings_fabrics'
        ]);
        $this->belongsToMany('Styles', [
            'foreignKey' => 'store_offering_id',
            'targetForeignKey' => 'style_id',
            'joinTable' => 'store_offerings_styles'
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
            ->requirePresence('price_range_from', 'create')
            ->notEmpty('price_range_from');
            
        $validator
            ->requirePresence('price_range_to', 'create')
            ->notEmpty('price_range_to');
            
        $validator
            ->add('customization_possible', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('customization_possible');
            
        $validator
            ->allowEmpty('customization_days');

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
        $rules->add($rules->existsIn(['offering_id'], 'Offerings'));
        return $rules;
    }
}
