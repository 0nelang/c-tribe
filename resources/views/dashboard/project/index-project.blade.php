@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('project.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="zero-conf" class="display" style="table-layout:fixed;
                            width:100%;">
                                <thead>
                                    <tr>
                                        <th>Brand</th>
                                        <th>Title</th>
                                        <th>option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project as $id => $p)

                                    <tr>
                                        <td>{{ $p->brand }}</td>
                                        <td>{{ $p->title }}</td>
                                        <td style="text-align: center">
                                            <div class="dropdown dropright">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item text-dark" href="{{ route('project.edit', ['project' => $p->id]) }}">Edit</a></li>
                                                    <li>
                                                        <form id="form-delete{{ $id }}" action="{{ route('project.destroy',['project' => $p->id]) }}" method="post" style="display: none">
                                                            @method('delete')
                                                            @csrf
                                                        </form>
                                                        <a class="dropdown-item text-dark" href="#" onclick="what({{ $id }})">delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Brand</th>
                                        <th>Title</th>
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
