<?php
namespace App\Model\Table;

use App\Model\Entity\Fabric;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fabrics Model
 */
class FabricsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('fabrics');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsToMany('StoreOfferings', [
            'foreignKey' => 'fabric_id',
            'targetForeignKey' => 'store_offering_id',
            'joinTable' => 'store_offerings_fabrics'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->add('is_visible', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_visible', 'create')
            ->notEmpty('is_visible');

        return $validator;
    }
}
