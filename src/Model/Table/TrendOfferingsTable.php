<?php
namespace App\Model\Table;

use App\Model\Entity\TrendOffering;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrendOfferings Model
 */
class TrendOfferingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('trend_offerings');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Trends', [
            'foreignKey' => 'trend_id',
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
        $rules->add($rules->existsIn(['trend_id'], 'Trends'));
        $rules->add($rules->existsIn(['offering_id'], 'Offerings'));
        return $rules;
    }
}
