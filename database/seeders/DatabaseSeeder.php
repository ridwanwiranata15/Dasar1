<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('id', 'ID');
        for ($i=0; $i < 10; $i++) { 
            DB::table('custumers')->insert([
                'name' => $faker->name(),
                'score' => $faker->numberBetween(0, 100)
            ]);
        }
}
}