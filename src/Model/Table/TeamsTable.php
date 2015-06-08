<?php
namespace App\Model\Table;

use App\Model\Entity\Team;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teams Model
 */
class TeamsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('teams');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Upload',[
            'imageQuality' => 80,
            'uploadField' => 'img',
            'config' => [
                'Teams' => [
                    'sizes' => [
                        '720x0' => [720, 0],
                        '40x0' => [40, 0],
                    ],
                    'dirPattern' => "{WWW_ROOT}uploads{DS}teams{DS}", // http://v3.zakoopi.com/uploads/teams/ + name + -size.jpg
                    'slugColumn' => "title"
                ]
            ]
        ]);
        
        
        $this->hasMany('TeamLikes', [
            'foreignKey' => 'team_id'
        ]);
        $this->hasMany('TeamUsers', [
            'foreignKey' => 'team_id'
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
            
//        $validator
//            ->requirePresence('timestamp', 'create')
//            ->notEmpty('timestamp');
            
//        $validator
//            ->add('hits', 'valid', ['rule' => 'numeric'])
//            ->requirePresence('hits', 'create')
//            ->notEmpty('hits');
            
//        $validator
//            ->add('img', 'valid', ['rule' => 'numeric'])
//            ->requirePresence('img', 'create')
//            ->notEmpty('img');

        return $validator;
    }
}
