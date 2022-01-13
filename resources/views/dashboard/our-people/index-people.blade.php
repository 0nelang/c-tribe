@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="/admin/people/create" class="btn btn-link btn-primary">
                                <i class="user-plus"></i> add
                            </a>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">image</th>
                                        <th scope="col">name</th>
                                        <th scope="col">title</th>
                                        <th scope="col">desc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($people as $pep)

                                    <tr>
                                        <th scope="row">{{ $pep->id }}</th>
                                        <td>{{ $pep->photo }}</td>
                                        <td>{{ $pep->name }}</td>
                                        <td>{{ $pep->title }}</td>
                                        <td>{{ $pep->description }}</td>
                                    </tr>

                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>


@endsection
