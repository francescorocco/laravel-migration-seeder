<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $train = new Train();
    $train->company = 'Ferrovie dello stato';
    $train->departure_station = 'Palermo';
    $train->arrival_station = 'Catania';
    $train->date = '2023-05-15';
    $train->departure_time = '08:44:00';
    $train->arrival_time = '10:55:00';
    $train->train_code = '520385';
    $train->number_of_carriages = '10';
    $train->delay = null;
    $train->deleted = false;
    $train->save();

    }
}
