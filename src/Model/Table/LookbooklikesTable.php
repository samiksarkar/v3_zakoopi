<?php
namespace App\Model\Table;

use App\Model\Entity\Lookbooklike;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lookbooklikes Model
 */
class LookbooklikesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('lookbooklikes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('CounterCache', ['Lookbooks' => ['lookbooklike_count']]);
        $this->belongsTo('Lookbooks', [
            'foreignKey' => 'lookbook_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->requirePresence('timestamp', 'create')
            ->notEmpty('timestamp');

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
        $rules->add($rules->existsIn(['lookbook_id'], 'Lookbooks'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
