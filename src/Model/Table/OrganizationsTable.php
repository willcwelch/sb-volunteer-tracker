<?php
namespace App\Model\Table;

use App\Model\Entity\Organization;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organizations Model
 *
 * @property \Cake\ORM\Association\HasMany $Projects
 * @property \Cake\ORM\Association\BelongsToMany $Affiliations
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class OrganizationsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('organizations');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Projects', [
            'foreignKey' => 'organization_id'
        ]);
        $this->belongsToMany('Affiliations', [
            'foreignKey' => 'organization_id',
            'targetForeignKey' => 'affiliation_id',
            'joinTable' => 'affiliations_organizations'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'organization_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'organizations_users'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('description');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->isUnique(['name']));
        return $rules;
    }
}
