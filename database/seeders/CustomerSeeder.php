<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    for ($i = 1; $i <= 50; $i++) {
        DB::table('customers')->insert([
            'name' => 'Customer ' . $i,
            'email' => 'customer' . $i . '@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
}
