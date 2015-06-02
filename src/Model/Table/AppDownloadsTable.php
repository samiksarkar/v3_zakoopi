<?php
namespace App\Model\Table;

use App\Model\Entity\AppDownload;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AppDownloads Model
 */
class AppDownloadsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('app_downloads');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('uuid', 'create')
            ->notEmpty('uuid');
            
        $validator
            ->requirePresence('first_started_at', 'create')
            ->notEmpty('first_started_at');
            
        $validator
            ->requirePresence('last_started_at', 'create')
            ->notEmpty('last_started_at');
            
        $validator
            ->requirePresence('version', 'create')
            ->notEmpty('version');
            
        $validator
            ->add('visit_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('visit_count', 'create')
            ->notEmpty('visit_count');

        return $validator;
    }
}
