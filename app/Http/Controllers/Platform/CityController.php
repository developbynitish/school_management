<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::query()
    ->join(
        'states',
        'states.id',
        '=',
        'cities.state_id'
    )
    ->join(
        'countries',
        'countries.id',
        '=',
        'states.country_id'
    )
    ->select(
        'cities.*',
        'states.name as state_name',
        'countries.name as country_name'
    )
    ->when(
        $request->filled('search'),
        function ($query) use ($request) {

            $search = $request->search;

            $query->where(function ($query) use ($search) {

                $query->where(
                    'cities.name',
                    'ILIKE',
                    '%' . $search . '%'
                )
                ->orWhere(
                    'states.name',
                    'ILIKE',
                    '%' . $search . '%'
                )
                ->orWhere(
                    'countries.name',
                    'ILIKE',
                    '%' . $search . '%'
                );

            });

        }
    )
    ->latest('cities.id')
    ->paginate(10)
    ->withQueryString();

        return view(
            'platform.cities.index',
            compact('cities')
        );
    }
}
