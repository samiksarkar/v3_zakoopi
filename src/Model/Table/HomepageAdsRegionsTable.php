<?php
namespace App\Model\Table;

use App\Model\Entity\HomepageAdsRegion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomepageAdsRegions Model
 */
class HomepageAdsRegionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('homepage_ads_regions');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('HomepageAds', [
            'foreignKey' => 'homepage_ad_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id',
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
        $rules->add($rules->existsIn(['homepage_ad_id'], 'HomepageAds'));
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        return $rules;
    }
}
