<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 200; $i++){

            DB::table('users')->insert([
                'user' => Str::random(20),
                'pass' => Str::random(20),
                'email' => Str::random(20) . "@" . array_rand(["gmail", "yahoo","aol"]) . ".com"
                
                
                ]);
            }
    }
}
