<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $maharashtra = State::where('code', 'MH')->first();

        City::create([
            'state_id' => $maharashtra->id,
            'name' => 'Mumbai',
            'status' => true,
        ]);

        City::create([
            'state_id' => $maharashtra->id,
            'name' => 'Pune',
            'status' => true,
        ]);

        City::create([
            'state_id' => $maharashtra->id,
            'name' => 'Nashik',
            'status' => true,
        ]);
    }
}