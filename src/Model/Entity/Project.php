<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity.
 *
 * @property int $id
 * @property int $organization_id
 * @property \App\Model\Entity\Organization $organization
 * @property string $name
 * @property string $description
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Type[] $types
 */
class Project extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
