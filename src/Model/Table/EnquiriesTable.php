<?php
namespace App\Model\Table;

use App\Model\Entity\Enquiry;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enquiries Model
 */
class EnquiriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('enquiries');
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
            ->requirePresence('store_name', 'create')
            ->notEmpty('store_name');
            
        $validator
            ->requirePresence('customer_name', 'create')
            ->notEmpty('customer_name');
            
        $validator
            ->add('contact_number', 'valid', ['rule' => 'numeric'])
            ->requirePresence('contact_number', 'create')
            ->notEmpty('contact_number');
            
        $validator
            ->requirePresence('contact_time', 'create')
            ->notEmpty('contact_time');
            
        $validator
            ->requirePresence('store_address', 'create')
            ->notEmpty('store_address');
            
        $validator
            ->requirePresence('isOwner', 'create')
            ->notEmpty('isOwner');

        return $validator;
    }
}
