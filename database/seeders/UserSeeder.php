<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Hussein Haule",
            'username' => 'husseinhaule',
            'email' => "hussein@cup.co.tz",
            'password' => Hash::make('qazplm741'),
        ]);
    }
}
