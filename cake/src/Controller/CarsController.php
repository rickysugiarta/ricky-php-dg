<?php
namespace App\Controller;

use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Http\Client;
use Cake\Error\Debugger;
use Cake\Console\ConsoleIo;

class CarsController extends AppController
{
    public function index()
    {
        $cars = $this->paginate($this->Car);
        $this->set(compact('cars'));
    }
    
    public function ingress()
    {
        // get data from external host
        $http = new Client();
        $response = $http->post(env('DG_HOST').'/cars', [
          'username' => env('DG_USERNAME'),
          'key' => env('DG_KEY'),
        ]);
        $jsonReponse = $response->getJson();
        
        if ($jsonReponse['success'] != 'ok'){
            // exit early, get data failed
            return $this->redirect('/cars');
        }
        
        foreach ($jsonReponse['cars'] as $car) {
            // check data if already exist
            $query = $this->Cars->findByLicensePlateAndLicenseState($car['licensePlate'], $car['licenseState']);
            $rowCount = $query->count();
            if ( $rowCount > 0 ) { continue; } //skip alr existed object

            // init db row object
            $carsTable = $this->fetchTable('Cars');
            $newCar = $carsTable->newEntity([
                'license_plate' => $car['licensePlate'],
                'license_state' => $car['licenseState'],
                'vin' => $car['vin'],
                'year' => $car['year'],
                'colour' => $car['colour'],
                'make' => $car['make'],
                'model' => $car['model'],
                'created' => new \DateTime('now'),
                'modified' => new \DateTime('now')
            ]);
            // save to db
            $carsTable->save($newCar);
        }
        
        return $this->redirect('/cars');
    }
}

?>