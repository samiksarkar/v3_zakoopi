<?php
namespace App\Model\Table;

use App\Model\Entity\Trend;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trends Model
 */
class TrendsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('trends');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Upload',[
            'imageQuality' => 80,
            'uploadField' => 'img',
            'config' => [
                'Trends' => [
                    'sizes' => [
                        '220x0' => [220, 0],
                        '80x0' => [80, 0],
                    ],
                    'dirPattern' => "{WWW_ROOT}uploads{DS}trends{DS}", // http://v3.zakoopi.com/uploads/markets/ + name + -size.jpg
                    'slugColumns' => ["trend_name",'city_id']
                ]
            ]
        ]);
        
        
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('TrendCities', [
            'foreignKey' => 'trend_id'
        ]);
        $this->hasMany('TrendOfferings', [
            'foreignKey' => 'trend_id'
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
            ->allowEmpty(
                    'id', 
                    'create',
                    'img',
                    'file_img'  //virtual Field for file
                    );
            
        $validator
            ->requirePresence('trend_name', 'create')
            ->notEmpty('trend_name');

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
