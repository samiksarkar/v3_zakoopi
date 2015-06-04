<?php
namespace App\Model\Table;

use App\Model\Entity\City;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cities Model
 */
class CitiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('cities');
        $this->displayField('city_name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Articles', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('ArticlesSorttrendings', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('Markets', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('SaleTownMarkets', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('SaleTownStores', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('Stores', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('Synonyms', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('Trends', [
            'foreignKey' => 'city_id'
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
            
        $validator
            ->requirePresence('city_name', 'create')
            ->notEmpty('city_name');

        return $validator;
    }
}
