<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 */
class ArticlesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('articles');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id'
        ]);
        $this->hasMany('ArticleHits', [
            'foreignKey' => 'article_id'
        ]);
        $this->hasMany('ArticleImages', [
            'foreignKey' => 'article_id'
        ]);
        $this->hasMany('ArticleStores', [
            'foreignKey' => 'article_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');
            
        $validator
            ->allowEmpty('slug');
            
        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');
            
        $validator
            ->requirePresence('summary', 'create')
            ->notEmpty('summary');
            
        $validator
            ->requirePresence('tags', 'create')
            ->notEmpty('tags');
            
        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');
            
        $validator
            ->add('sponsored', 'valid', ['rule' => 'numeric'])
            ->requirePresence('sponsored', 'create')
            ->notEmpty('sponsored');
            
        $validator
            ->add('trending', 'valid', ['rule' => 'numeric'])
            ->requirePresence('trending', 'create')
            ->notEmpty('trending');
            
        $validator
            ->add('hits', 'valid', ['rule' => 'numeric'])
            ->requirePresence('hits', 'create')
            ->notEmpty('hits');
            
        $validator
            ->add('sort', 'valid', ['rule' => 'numeric'])
            ->requirePresence('sort', 'create')
            ->notEmpty('sort');
            
        $validator
            ->add('createdBy', 'valid', ['rule' => 'numeric'])
            ->requirePresence('createdBy', 'create')
            ->notEmpty('createdBy');
            
        $validator
            ->requirePresence('approved', 'create')
            ->notEmpty('approved');
            
        $validator
            ->add('modifiedBy', 'valid', ['rule' => 'numeric'])
            ->requirePresence('modifiedBy', 'create')
            ->notEmpty('modifiedBy');

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
        return $rules;
    }
}
