<?php
namespace App\Model\Table;

use App\Model\Entity\StoreAd;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StoreAds Model
 */
class StoreAdsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('store_ads');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Regions', [
            'foreignKey' => 'store_ad_id',
            'targetForeignKey' => 'region_id',
            'joinTable' => 'regions_store_ads'
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
            ->requirePresence('type', 'create')
            ->notEmpty('type');
            
        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');
            
        $validator
            ->requirePresence('tagline', 'create')
            ->notEmpty('tagline');
            
        $validator
            ->add('rate_of_ad', 'valid', ['rule' => 'decimal'])
            ->requirePresence('rate_of_ad', 'create')
            ->notEmpty('rate_of_ad');
            
        $validator
            ->requirePresence('redirectto', 'create')
            ->notEmpty('redirectto');
            
        $validator
            ->requirePresence('keywords', 'create')
            ->notEmpty('keywords');
            
        $validator
            ->requirePresence('image', 'create')
            ->notEmpty('image');

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
        return $rules;
    }
}
