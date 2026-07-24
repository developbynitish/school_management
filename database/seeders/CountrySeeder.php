<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            [
                'name' => 'India',
                'code' => 'IN',
                'phone_code' => '+91',
                'status' => true,
            ],
            [
                'name' => 'United States',
                'code' => 'US',
                'phone_code' => '+1',
                'status' => true,
            ],
        ];

        foreach ($countries as $country) {
            Country::updateOrCreate(
                [
                    'code' => $country['code'],
                ],
                $country
            );
        }
    }
}