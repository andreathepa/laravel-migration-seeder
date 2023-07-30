<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;

use App\Models\train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $train= new Train();
            $train->azienda = $faker->word();
            $train->partenza = $faker->word();
            $train->arrivo = $faker->word();
            $train->data_partenza = $faker->date();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(1,7);
            $train->n_vagone = $faker->numberBetween(1,15);
            $train->on_time = $faker->boolean();
            $train->delayed = $faker->boolean();

            $train->save();



        }
    }
}
