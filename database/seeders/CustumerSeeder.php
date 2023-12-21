<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1','name' =>  'Ridwan','score' => 100],
            ['id' => '2','name' =>  'Adam','score' => 200],
            ['id' => '3','name' =>  'Aip','score' => 300],
            ['id' => '4','name' =>  'Nasywa','score' => 400],
            
        ];
        DB::table('custumers')->insert($data);
    }
}
