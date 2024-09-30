<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Quote extends Entity
{
    protected array $_accessible = [
        'id' => true,
        'license_plate' => true,
        'license_state' => true,
        'price' => true,
        'repairer' => true,
        'overview_of_work' => true,
        'created' => true,
        'modified' => true,
    ];
}
