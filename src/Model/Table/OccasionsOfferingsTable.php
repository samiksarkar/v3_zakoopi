<?php
namespace App\Model\Table;

use App\Model\Entity\OccasionsOffering;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OccasionsOfferings Model
 */
class OccasionsOfferingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('occasions_offerings');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Occasions', [
            'foreignKey' => 'occasion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Offerings', [
            'foreignKey' => 'offering_id',
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
        $rules->add($rules->existsIn(['occasion_id'], 'Occasions'));
        $rules->add($rules->existsIn(['offering_id'], 'Offerings'));
        return $rules;
    }
}
