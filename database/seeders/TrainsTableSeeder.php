<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < $faker->numberBetween(0,30); $i++) {
            $newTrain = new Train ();
            $newTrain->train_company = $faker->word(10);
            $newTrain->station_start = $faker->words(2, true);
            $newTrain->station_end = $faker->words(2, true);
            $newTrain->time_start_date = '2023-07-03';
            $newTrain->time_start_time = $faker->time();
            $newTrain->time_end_date = $faker->date();
            $newTrain->time_end_time = $faker->time();
            $newTrain->code_train = $faker->numberBetween(1000, 9999);
            $newTrain->number_carriage = $faker->numberBetween(3, 12);
            $newTrain->delay = $faker->numberBetween(0, 150);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
        for ($i = 0; $i < $faker->numberBetween(0,30); $i++) {
            $newTrain = new Train ();
            $newTrain->train_company = $faker->word(10);
            $newTrain->station_start = $faker->words(2, true);
            $newTrain->station_end = $faker->words(2, true);
            $newTrain->time_start_date = $faker->date();
            $newTrain->time_start_time = $faker->time();
            $newTrain->time_end_date = $faker->date();
            $newTrain->time_end_time = $faker->time();
            $newTrain->code_train = $faker->numberBetween(1000, 9999);
            $newTrain->number_carriage = $faker->numberBetween(3, 12);
            $newTrain->delay = $faker->numberBetween(0, 150);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
