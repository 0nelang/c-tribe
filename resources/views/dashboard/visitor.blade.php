@extends('layouts.dashboard-main')

@section('main')



<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Total Visitors</h5>
                        <h2>{{ $all_visitor }}</h2>
                        <p>TOTAL</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">New Visitors Today</h5>
                        {{-- <h2>{{ $today }}</h2> --}}
                        <p>Orders in waitlist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Monthly Profit</h5>
                        <h2>7.4K</h2>
                        <p>For last 30 days</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card stat-widget">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <h2>87</h2>
                        <p>Orders in waitlist</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Revenue</h5>
                        <div id="apex1"></div>
                    </div>
                </div>
            </div>
@endsection
