<?php
namespace App\Model\Table;

use App\Model\Entity\Region;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regions Model
 */
class RegionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('regions');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsToMany('HomepageAds', [
            'foreignKey' => 'region_id',
            'targetForeignKey' => 'homepage_ad_id',
            'joinTable' => 'homepage_ads_regions'
        ]);
        $this->belongsToMany('SearchAds', [
            'foreignKey' => 'region_id',
            'targetForeignKey' => 'search_ad_id',
            'joinTable' => 'regions_search_ads'
        ]);
        $this->belongsToMany('StoreAds', [
            'foreignKey' => 'region_id',
            'targetForeignKey' => 'store_ad_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
