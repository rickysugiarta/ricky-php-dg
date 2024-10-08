<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class CarsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Quotes'); // Add this line
    }
}