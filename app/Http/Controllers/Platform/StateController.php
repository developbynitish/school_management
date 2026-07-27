<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $states = State::query()
    ->join(
        'countries',
        'countries.id',
        '=',
        'states.country_id'
    )
    ->select(
        'states.*',
        'countries.name as country_name'
    )
    ->when(
        $request->filled('search'),
        function ($query) use ($request) {

            $search = $request->search;

            $query->where(function ($query) use ($search) {

                $query->where(
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
    ->latest('states.id')
    ->paginate(10)
    ->withQueryString();

        return view(
            'platform.states.index',
            compact('states')
        );
    }
}