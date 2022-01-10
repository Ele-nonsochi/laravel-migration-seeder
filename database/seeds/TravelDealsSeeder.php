<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TravelDeal;

class TravelDealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $travel = new TravelDeal();
            $travel->image_path = $faker->imageUrl;
            $travel->city = $faker->city();
            $travel->duration = $faker->date();
            $travel->description = $faker->realText();
            $travel->price = $faker->numberBetween(500, 4500);
            $travel->save();
    }
}
}