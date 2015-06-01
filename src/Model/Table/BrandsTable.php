<?php
namespace App\Model\Table;

use App\Model\Entity\Brand;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Brands Model
 */
class BrandsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('brands');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Stores', [
            'foreignKey' => 'brand_id'
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
            ->requirePresence('brand_name', 'create')
            ->notEmpty('brand_name');
            
        $validator
            ->requirePresence('logo_path', 'create')
            ->notEmpty('logo_path');
            
        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
