<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nankoreTableSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            foreach (range(1, 3) as $num) {
                DB::table('nankores')->insert([
                    'id' => "{$num}",
                    "user_id" => "1",
                    'title' => "サンプル本 {$num}",
                    'author' => "サンプル著者{$num}",
                    'ISBN'=> "12345678{$num}",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    
}
