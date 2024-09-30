<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

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

    protected function _getSlug()
    {
        return Text::slug(strtolower($this->license_state . $this->license_plate));
    }

    protected function _setSlug($slug)
    {
        $this->license_state = substr($slug,0,3);
        $this->license_plate = substr($slug,3);

        return $slug;
    }
}
