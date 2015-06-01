<?php
namespace App\Model\Table;

use App\Model\Entity\Occasion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Occasions Model
 */
class OccasionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('occasions');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsToMany('Offerings', [
            'foreignKey' => 'occasion_id',
            'targetForeignKey' => 'offering_id',
            'joinTable' => 'occasions_offerings'
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
            ->requirePresence('occasion', 'create')
            ->notEmpty('occasion');

        return $validator;
    }
}
