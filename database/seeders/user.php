<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            
            [
            'name' => 'hamal',
            'email' => 'hamalrizky09@gmail.com',
            'phoneNumber' => '082292389762',
            'role' => 1,
            'password' => Hash::make('password'),
            ]
    );
    }
}
