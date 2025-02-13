<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class producerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('producers')->insert([
            "producer_id"=>"1",
            "name"=>"Goldwyn Mayer",
            "foundation_date"=>"1924-04-17",
            "web"=>"www.mgm.com",
            "created_at"=>now(),
        ]);

        DB::table('producers')->insert([
            "producer_id"=>"2",
            "name"=>"Marvel studios",
            "foundation_date"=>"1993-12-07",
            "web"=>"www.marvel.com",
            "created_at"=>now(),
        ]);
    }
}
