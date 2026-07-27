@extends('platform.layouts.app')

@section('title', 'Countries')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">


            

        </div>

    </div>

</div>


<section class="content">

    <div class="container-fluid">

        <div class="card">

            {{-- Card Header --}}

            <div class="card-header">

                <div class="d-flex
                    justify-content-between
                    align-items-center"
                >

                    <h3 class="card-title">
                        Country List
                    </h3>

                    <a
                        href="#"
                        class="btn btn-primary btn-sm"
                    >

                        <i class="fas fa-plus mr-1"></i>

                        Add Country

                    </a>

                </div>

            </div>


            {{-- Card Body --}}

            <div class="card-body">

                <form method="GET" action="{{ route('platform.countries.index') }}" class="mb-3">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="input-group">

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Search country..."
                                    value="{{ request('search') }}"
                                >

                                <div class="input-group-append">

                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="fas fa-search"></i>
                                    </button>

                                </div>

                            </div>

                        </div>

                        @if(request('search'))

                            <div class="col-md-2">

                                <a
                                    href="{{ route('platform.countries.index') }}"
                                    class="btn btn-secondary"
                                >
                                    Clear
                                </a>

                            </div>

                        @endif

                    </div>

                </form>

                <div class="table-responsive">

                    <table class="table
                        table-bordered
                        table-hover
                        align-middle"
                    >

                        <thead>

                            <tr>

                                <th width="70">
                                    #
                                </th>

                                <th>
                                    Country Name
                                </th>

                                <th>
                                    Code
                                </th>

                                <th>
                                    Phone Code
                                </th>

                                <th>
                                    Status
                                </th>

                                <th width="150">
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($countries as $country)

                                <tr>

                                    <td>
                                        {{ $countries->firstItem() + $loop->index }}
                                    </td>

                                    <td>
                                        {{ $country->name }}
                                    </td>

                                    <td>
                                        {{ $country->code }}
                                    </td>

                                    <td>
                                        {{ $country->phone_code }}
                                    </td>

                                    <td>

                                        @if($country->status)

                                            <span class="badge badge-success">
                                                Active
                                            </span>

                                        @else

                                            <span class="badge badge-danger">
                                                Inactive
                                            </span>

                                        @endif

                                    </td>

                                    <td>

                                        <a
                                            href="#"
                                            class="btn btn-sm btn-info"
                                        >

                                            <i class="fas fa-edit"></i>

                                        </a>

                                        <button
                                            type="button"
                                            class="btn btn-sm btn-danger"
                                        >

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="6"
                                        class="text-center"
                                    >

                                        No countries found.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>


                {{-- Pagination --}}

                @if($countries->hasPages())

                    <div class="mt-3">

                        {{ $countries->links() }}

                    </div>

                @endif

            </div>

        </div>

    </div>

</section>

@endsection