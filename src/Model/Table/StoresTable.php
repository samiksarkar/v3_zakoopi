<?php
namespace App\Model\Table;

use App\Model\Entity\Store;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stores Model
 */
class StoresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('stores');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id'
        ]);
        $this->hasMany('HomepageAds', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('ReportErrors', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('SaleHotDeals', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('SaleTownDeals', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('SearchAds', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('StoreAds', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('StoreCards', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('StoreImages', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('StoreOfferings', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('StoreRatings', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('StoreReviews', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('UserCheckins', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('UserFavourites', [
            'foreignKey' => 'store_id'
        ]);
        $this->hasMany('StoreLikes', [
            'foreignKey' => 'store_id'
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
            ->allowEmpty('store_name');
            
        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');
            
        $validator
            ->allowEmpty('store_address');
            
        $validator
            ->allowEmpty('area');
            
        $validator
            ->allowEmpty('market');
            
        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');
            
        $validator
            ->add('pin_code', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pin_code');
            
        $validator
            ->allowEmpty('reference_no');
            
        $validator
            ->allowEmpty('store_timing_from');
            
        $validator
            ->allowEmpty('store_timing_to');
            
        $validator
            ->add('metro_longitude', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('metro_longitude');
            
        $validator
            ->add('metro_latitude', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('metro_latitude');
            
        $validator
            ->allowEmpty('store_type');
            
        $validator
            ->add('latitude', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('latitude');
            
        $validator
            ->add('longitude', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('longitude');
            
        $validator
            ->allowEmpty('closed_day');
            
        $validator
            ->allowEmpty('ads_type');
            
        $validator
            ->allowEmpty('payment_mode');
            
        $validator
            ->allowEmpty('telephone');
            
        $validator
            ->allowEmpty('parking_type');
            
        $validator
            ->allowEmpty('store_email_address');
            
        $validator
            ->allowEmpty('website');
            
        $validator
            ->allowEmpty('facebook_link');
            
        $validator
            ->allowEmpty('twitter_link');
            
        $validator
            ->allowEmpty('tags');
            
        $validator
            ->add('age_from', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('age_from');
            
        $validator
            ->add('age_to', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('age_to');
            
        $validator
            ->add('alteration_possible', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('alteration_possible');
            
        $validator
            ->add('renting_possible', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('renting_possible');
            
        $validator
            ->allowEmpty('store_representative_name');
            
        $validator
            ->allowEmpty('data_collected_by');
            
        $validator
            ->add('is_active', 'valid', ['rule' => 'numeric'])
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');
            
        $validator
            ->add('is_trending', 'valid', ['rule' => 'numeric'])
            ->requirePresence('is_trending', 'create')
            ->notEmpty('is_trending');
            
        $validator
            ->requirePresence('trending_image_name', 'create')
            ->notEmpty('trending_image_name');
            
        $validator
            ->add('user_favourite_count', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('user_favourite_count');
            
        $validator
            ->add('user_checkin_count', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('user_checkin_count');
            
        $validator
            ->add('store_rating_count', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('store_rating_count');
            
        $validator
            ->add('store_review_count', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('store_review_count');
            
        $validator
            ->add('overall_ratings', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('overall_ratings');
            
        $validator
            ->add('tagged_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tagged_count', 'create')
            ->notEmpty('tagged_count');
            
        $validator
            ->allowEmpty('google_plus_link');
            
        $validator
            ->allowEmpty('instagram_link');
            
        $validator
            ->allowEmpty('linkedin_link');
            
        $validator
            ->allowEmpty('youtube_link');
            
        $validator
            ->allowEmpty('any_other_link');
            
        $validator
            ->allowEmpty('date_of_data_collection');
            
        $validator
            ->allowEmpty('data_validated_by');
            
        $validator
            ->allowEmpty('data_collection_method');
            
        $validator
            ->allowEmpty('comments');
            
        $validator
            ->allowEmpty('timestamp');

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
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        return $rules;
    }
}
