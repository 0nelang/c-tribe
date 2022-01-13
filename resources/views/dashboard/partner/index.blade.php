@extends('layouts.dashboard-main')

@section('main')

<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="btn btn-link btn-primary">
                            <i class="user-plus"></i> add
                        </a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">logo</th>
                                    <th scope="col">index</th>
                                    <th scope="col">title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src=".." alt=".."></td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @endsection
