<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $india = Country::where('code', 'IN')->first();

        State::create([
            'country_id' => $india->id,
            'name' => 'Maharashtra',
            'code' => 'MH',
            'status' => true,
        ]);

        State::create([
            'country_id' => $india->id,
            'name' => 'Gujarat',
            'code' => 'GJ',
            'status' => true,
        ]);

        State::create([
            'country_id' => $india->id,
            'name' => 'Karnataka',
            'code' => 'KA',
            'status' => true,
        ]);
    }
}