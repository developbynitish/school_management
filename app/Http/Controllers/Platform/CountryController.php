<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $countries = Country::query()
            ->when(
                $request->filled('search'),
                function ($query) use ($request) {
                    $query->where(
                        'name',
                        'ILIKE',
                        '%' . $request->search . '%'
                    );
                }
            )
            ->latest('id')
            ->paginate(10)
            ->withQueryString();

        return view(
            'platform.countries.index',
            compact('countries')
        );
    }
}