<?php

namespace App\Model\Table;

use App\Model\Entity\Market;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Markets Model
 */
class MarketsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        $this->table('markets');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Upload',[
            'imageQuality' => 80,
            'uploadField' => 'img',
            'config' => [
                'Markets' => [
                    'sizes' => [
                        '220x0' => [220, 0],
                        '40x0' => [40, 0],
                    ],
                    'dirPattern' => "{WWW_ROOT}uploads{DS}markets{DS}", // http://v3.zakoopi.com/uploads/markets/ + name + -size.jpg
                    'slugColumn' => "market_name"
                ]
            ]
        ]);
//        $this->addBehavior('Utils.Uploadable', [
//            'picture' => [
//                'fileName' => '{field}.{extension}',
//                'path' => '{ROOT}{DS}{WEBROOT}{DS}uploads{DS}markets{DS}',
//                'removeFileOnUpdate' => true,
//                'removeFileOnDelete' => true,
//                'fields' => [
//                    'directory' => 'img',
////                    'type' => 'img_type',
////                    'size' => 'img_size',
////                    'fileName' => 'img_name',
////                    'filePath' => 'img_path'
//                ]
//            ],
//        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->allowEmpty(
                        'id', 
                        'create',
                        'img',
                        'file_img'  //virtual Field for file
                        );

        $validator
                ->requirePresence('market_name', 'create')
                ->notEmpty('market_name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        return $rules;
    }

}
