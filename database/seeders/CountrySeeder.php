<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        Country::create([
            'name' => 'India',
            'code' => 'IN',
            'phone_code' => '+91',
            'status' => true,
        ]);

        Country::create([
            'name' => 'United States',
            'code' => 'US',
            'phone_code' => '+1',
            'status' => true,
        ]);
    }
}