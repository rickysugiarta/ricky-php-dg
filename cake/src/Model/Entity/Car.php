<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Car extends Entity
{
    protected array $_accessible = [
        'license_plate' => true,
        'license_state' => true,
        'vin' => true,
        'year' => true,
        'colour' => true,
        'make' => true,
        'model' => true,
        'created' => true,
        'modified' => true,
    ];
}
