<?php
namespace App\Model\Table;

use App\Model\Entity\Lookbook;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lookbooks Model
 */
class LookbooksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('lookbooks');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
//            'joinType' => 'INNER'
        ]);
        $this->hasMany('Cards', [
            'foreignKey' => 'lookbook_id'
        ]);
        $this->hasMany('Lookbookcomments', [
            'foreignKey' => 'lookbook_id'
        ]);
        $this->hasMany('Lookbooklikes', [
            'foreignKey' => 'lookbook_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');
            
        $validator
            ->requirePresence('tags', 'create')
            ->notEmpty('tags');
            
        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');
            
        $validator
            ->requirePresence('timesstamp', 'create')
            ->notEmpty('timesstamp');
            
        $validator
            ->add('lookbookcomment_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('lookbookcomment_count', 'create')
            ->notEmpty('lookbookcomment_count');
            
        $validator
            ->add('lookbooklike_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('lookbooklike_count', 'create')
            ->notEmpty('lookbooklike_count');
            
        $validator
            ->add('view_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('view_count', 'create')
            ->notEmpty('view_count');

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
        return $rules;
    }
}
