@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>School Management Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Total Students</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>25</h3>
                    <p>Total Teachers</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
            </div>
        </div>
    </div>
@stop