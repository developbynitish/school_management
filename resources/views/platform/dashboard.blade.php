@extends('platform.layouts.app')


@section('title', 'Platform Dashboard')


@section('content')


<div class="app-content-header">


    <div class="container-fluid">


        <div class="row">


            <div class="col-sm-6">

                <h3 class="mb-0">

                    Dashboard

                </h3>

            </div>


            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-end">

                    <li class="breadcrumb-item">

                        Home

                    </li>

                    <li class="breadcrumb-item active">

                        Dashboard

                    </li>

                </ol>

            </div>


        </div>


    </div>


</div>



<div class="app-content">


    <div class="container-fluid">


        {{-- ================================================= --}}
        {{-- WELCOME --}}
        {{-- ================================================= --}}

        <div class="card mb-4">


            <div class="card-body">


                <div
                    class="d-flex
                    justify-content-between
                    align-items-center"
                >


                    <div>


                        <h4>

                            Welcome to School Management Platform

                        </h4>


                        <p class="text-muted mb-0">

                            Manage schools, employees,
                            access control and platform settings.

                        </p>


                    </div>


                    <a
                        href="{{ route('platform.schools.create') }}"
                        class="btn btn-primary"
                    >

                        <i class="fas fa-plus me-2"></i>

                        Add School

                    </a>


                </div>


            </div>


        </div>



        {{-- ================================================= --}}
        {{-- STATISTICS --}}
        {{-- ================================================= --}}

        <div class="row">


            {{-- Total Schools --}}

            <div class="col-lg-3 col-md-6">


                <div class="card">


                    <div class="card-body">


                        <div class="d-flex
                            justify-content-between
                            align-items-center"
                        >


                            <div>


                                <h6 class="text-muted">

                                    Total Schools

                                </h6>


                                <h2 class="mb-0">

                                    {{ $totalSchools }}

                                </h2>


                            </div>


                            <div class="text-primary fs-1">

                                <i class="fas fa-school"></i>

                            </div>


                        </div>


                    </div>


                </div>


            </div>



            {{-- Active Schools --}}

            <div class="col-lg-3 col-md-6">


                <div class="card">


                    <div class="card-body">


                        <div class="d-flex
                            justify-content-between
                            align-items-center"
                        >


                            <div>


                                <h6 class="text-muted">

                                    Active Schools

                                </h6>


                                <h2 class="mb-0">

                                    {{ $activeSchools }}

                                </h2>


                            </div>


                            <div class="text-success fs-1">

                                <i class="fas fa-check-circle"></i>

                            </div>


                        </div>


                    </div>


                </div>


            </div>



            {{-- Pending Requests --}}

            <div class="col-lg-3 col-md-6">


                <div class="card">


                    <div class="card-body">


                        <div class="d-flex
                            justify-content-between
                            align-items-center"
                        >


                            <div>


                                <h6 class="text-muted">

                                    Pending Requests

                                </h6>


                                <h2 class="mb-0">

                                    {{ $pendingRequest }}

                                </h2>


                            </div>


                            <div class="text-warning fs-1">

                                <i class="fas fa-clock"></i>

                            </div>


                        </div>


                    </div>


                </div>


            </div>



            {{-- Platform Employees --}}

            <div class="col-lg-3 col-md-6">


                <div class="card">


                    <div class="card-body">


                        <div class="d-flex
                            justify-content-between
                            align-items-center"
                        >


                            <div>


                                <h6 class="text-muted">

                                    Platform Employees

                                </h6>


                                <h2 class="mb-0">

                                    {{$totalemployee}}

                                </h2>


                            </div>


                            <div class="text-info fs-1">

                                <i class="fas fa-users"></i>

                            </div>


                        </div>


                    </div>


                </div>


            </div>


        </div>



        {{-- ================================================= --}}
        {{-- RECENT SCHOOL REQUESTS --}}
        {{-- ================================================= --}}

        <div class="card mt-4">


            <div class="card-header">


                <h3 class="card-title">

                    Recent School Requests

                </h3>


                <div class="card-tools">

                    <a
                        href="#"
                        class="btn btn-sm btn-outline-primary"
                    >

                        View All

                    </a>

                </div>


            </div>


            <div class="card-body p-0">


                <div class="table-responsive">


                    <table class="table table-hover mb-0">


                        <thead>


                            <tr>

                                <th>

                                    School

                                </th>

                                <th>

                                    Location

                                </th>

                                <th>

                                    Status

                                </th>

                                <th>

                                    Date

                                </th>

                            </tr>


                        </thead>


                        <tbody>


                            <tr>

                                <td>

                                    ABC International School

                                </td>

                                <td>

                                    Mumbai, India

                                </td>

                                <td>

                                    <span class="badge text-bg-success">

                                        Active

                                    </span>

                                </td>

                                <td>

                                    Today

                                </td>

                            </tr>


                            <tr>

                                <td>

                                    XYZ Public School

                                </td>

                                <td>

                                    Pune, India

                                </td>

                                <td>

                                    <span class="badge text-bg-warning">

                                        Pending

                                    </span>

                                </td>

                                <td>

                                    Yesterday

                                </td>

                            </tr>


                        </tbody>


                    </table>


                </div>


            </div>


        </div>


    </div>


</div>


@endsection