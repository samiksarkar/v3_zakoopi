<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('ArticleHits', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Lookbookcomments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Lookbooklikes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Lookbooks', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ReportErrors', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('StoreRatings', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('StoreReviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserCheckins', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserFavourites', [
            'foreignKey' => 'user_id'
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
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');
            
        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');
            
        $validator
            ->allowEmpty('last_name');
            
        $validator
            ->allowEmpty('password');
            
//        $validator
//            ->allowEmpty('age');
//            
//        $validator
//            ->add('gender', 'valid', ['rule' => 'boolean'])
//            ->allowEmpty('gender');
//            
//        $validator
//            ->allowEmpty('location');
//            
//        $validator
//            ->add('created_on', 'valid', ['rule' => 'datetime'])
//            ->requirePresence('created_on', 'create')
//            ->notEmpty('created_on');
//            
//        $validator
//            ->requirePresence('roles', 'create')
//            ->notEmpty('roles');
//            
//        $validator
//            ->add('isArticleUser', 'valid', ['rule' => 'numeric'])
//            ->requirePresence('isArticleUser', 'create')
//            ->notEmpty('isArticleUser');
//            
//        $validator
//            ->add('isExpertUser', 'valid', ['rule' => 'numeric'])
//            ->requirePresence('isExpertUser', 'create')
//            ->notEmpty('isExpertUser');
//            
//        $validator
//            ->allowEmpty('uid');
//            
//        $validator
//            ->add('is_active', 'valid', ['rule' => 'numeric'])
//            ->requirePresence('is_active', 'create')
//            ->notEmpty('is_active');
//            
//        $validator
//            ->requirePresence('img', 'create')
//            ->notEmpty('img');
//            
//        $validator
//            ->requirePresence('badge', 'create')
//            ->notEmpty('badge');
//            
//        $validator
//            ->requirePresence('fb_link', 'create')
//            ->notEmpty('fb_link');
//            
//        $validator
//            ->requirePresence('twitter_link', 'create')
//            ->notEmpty('twitter_link');
//            
//        $validator
//            ->requirePresence('google_link', 'create')
//            ->notEmpty('google_link');
//            
//        $validator
//            ->requirePresence('other_website', 'create')
//            ->notEmpty('other_website');
//            
//        $validator
//            ->requirePresence('about', 'create')
//            ->notEmpty('about');
//            
//        $validator
//            ->requirePresence('pass_hash', 'create')
//            ->notEmpty('pass_hash');

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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
