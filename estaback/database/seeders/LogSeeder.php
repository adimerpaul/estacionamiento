<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("logs")->insert([
            ["fecha"=>"2021-01-01","hora"=>"10:00","monto"=>10,"auto_id"=>1,"user_id"=>1],
        ]);
    }
}
