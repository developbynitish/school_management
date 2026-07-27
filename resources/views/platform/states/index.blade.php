@extends('platform.layouts.app')

@section('title', 'States')

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

            <div class="card-header">

                <div class="d-flex
                    justify-content-between
                    align-items-center">

                    <h3 class="card-title">
                        State List
                    </h3>

                    <a
                        href="#"
                        class="btn btn-primary btn-sm"
                    >
                        <i class="fas fa-plus mr-1"></i>
                        Add State
                    </a>

                </div>

            </div>


            <div class="card-body">

                {{-- Search --}}

                <form method="GET" action="{{ route('platform.states.index') }}" class="mb-3">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="input-group">

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Search state..."
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
                                    href="{{ route('platform.states.index') }}"
                                    class="btn btn-secondary"
                                >
                                    Clear
                                </a>

                            </div>

                        @endif

                    </div>

                </form>


                {{-- Table --}}

                <div class="table-responsive">

                    <table class="table
                        table-bordered
                        table-hover"
                    >

                        <thead>

                            <tr>

                                <th width="70">
                                    #
                                </th>

                                <th>
                                    State Name
                                </th>

                                <th>
                                    Country Name
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

                            @forelse($states as $state)

                                <tr>

                                    <td>
                                        {{ $states->firstItem() + $loop->index }}
                                    </td>

                                    <td>
                                        {{ $state->name }}
                                    </td>

                                    <td>
                                        {{ $state->country_name }}
                                    </td>

                                    <td>

                                        @if($state->status)

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
                                        colspan="4"
                                        class="text-center"
                                    >
                                        No states found.
                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>


                {{-- Pagination --}}

                <div class="mt-3">

                    {{ $states->links() }}

                </div>

            </div>

        </div>

    </div>

</section>

@endsection