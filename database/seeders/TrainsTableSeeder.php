<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $data = self::getCsvContent(__DIR__ . '/trains.csv');

        foreach($data as $index => $row){
            if($index > 0){
                $newTrain = new Train;
                $newTrain->company = $row[0];
                $newTrain->departure_station = $row[1];
                $newTrain->arrival_station = $row[2];
                $newTrain->date = $row[3];
                $newTrain->departure_time = $row[4];
                $newTrain->arrival_time = $row[5];
                $newTrain->train_code = $row[6];
                $newTrain->number_of_carriages = $row[7];
                $newTrain->delay = $row[8];
                $newTrain->deleted = $row[9];
                $newTrain->save();
            }
        }

        for($i=0; $i < 10; $i++){

            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->date = $faker->date();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->number_of_carriages = $faker->randomNumber(2, true);
            $train->delay = null;
            $train->deleted = false;
            $train->save();
        }

    }

    public static function getCsvContent(string $path){
        
        $data = [];

        $file = fopen($path, 'r');

        if($file === false){
            echo 'File o percorso non valido';
        }

        while(($row = fgetcsv($file)) !== FALSE){
            $data [] = $row;


        }
        return $data;

    }
}
