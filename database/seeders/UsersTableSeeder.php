<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'dummy@email.com',
            'password' => bcrypt('test1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        User::factory()
            ->count(100)
            ->create();

    }
}
