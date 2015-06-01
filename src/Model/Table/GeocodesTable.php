<?php
namespace App\Model\Table;

use App\Model\Entity\Geocode;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Geocodes Model
 */
class GeocodesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('geocodes');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('place', 'create')
            ->notEmpty('place');
            
        $validator
            ->add('lat', 'valid', ['rule' => 'decimal'])
            ->requirePresence('lat', 'create')
            ->notEmpty('lat');
            
        $validator
            ->add('lng', 'valid', ['rule' => 'decimal'])
            ->requirePresence('lng', 'create')
            ->notEmpty('lng');

        return $validator;
    }
}
