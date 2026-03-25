<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $departureTime = $faker->dateTimeBetween('now', '+3 days');
            $newTrain->departure_time = $departureTime;
            $newTrain->arrival_time = $faker->dateTimeBetween($departureTime, $departureTime->format('Y-m-d H:i:s') . ' +5 hours');
            $newTrain->train_code = $faker->bothify('??####');
            $newTrain->number_of_carriages = $faker->numberBetween(3, 12);
            $newTrain->is_on_time = $faker->boolean(80);
            $newTrain->is_cancelled = $faker->boolean(10);
            $newTrain->save();
        }
    }
}
