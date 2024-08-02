<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Baju',
                ],
                
                [
                'name' => 'Celana',
                ],
                
                [
                'name' => 'Jaket',
                ],
    
                [
                'name' => 'Topi',
                ],
            ];
            foreach ($data as $key => $value) {
                DB::table('category')->insert($value);
            
    }
}
}
