<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
Use App\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        
        $date1 = date('2019-01-01 00:00:00');
        $date2 = date('2022-01-01 00:00:00');

        for($i=0; $i<30; $i++)
        {
            $vehicle = new Vehicle();
            $int = rand(strtotime($date1),strtotime($date2));

            $vehicle->brand = $faker->vehicleBrand; 
            $vehicle->model = $faker->vehicleModel;
            $vehicle->plate_number = $faker->vehicleRegistration('[A-Z]{2}-[0-9]{4}-[A-Z]{2}');;
            $vehicle->insurance_date = date('Y-m-d H:i:s', $int);
            $vehicle->save();
        }
    }
}
