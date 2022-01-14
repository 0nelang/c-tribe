@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('people.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="zero-conf" class="display" style="table-layout:fixed;
                            width:100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>desc</th>
                                        <th>photo</th>
                                        <th>option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($people as $pep)

                                    <tr>
                                        <td>{{ $pep->name }}</td>
                                        <td>{{ $pep->title }}</td>
                                        <td>{{ $pep->description }}</td>
                                        <td><img src="{{ asset('storage/' . $pep->photo ) }}" style="width: 210px"></td>
                                        <td style="text-align: center">
                                            <div class="dropdown dropstart">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item text-dark" href="/admin/people/{{ $pep->id }}/edit">Edit</a></li>
                                                    <li>
                                                        <form action="{{ route('people.destroy',['person' => $pep->id]) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="badge bg-danger border-0" onclick="confirm('delete post?')">delete</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>desc</th>
                                        <th>photo</th>
                                        <th>option</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
