@extends('layouts.dashboard-main')

@section('main')

<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('flagship.create') }}" class="btn btn-primary mb-3">Create</a>
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($flag as $id => $pep)

                                    <tr>
                                        <td>{{ $id + 1 }}</td>
                                        <td>{{ $pep->title }}</td>
                                        <td style="">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item text-dark" href="{{ route('flagship.edit',['flagship' => $pep->id]) }}">Edit</a></li>
                                                    <li>
                                                        <form id="form-delete{{ $id }}" action="{{ route('flagship.destroy',['flagship' => $pep->id]) }}" method="post"
                                                            style="display: none">
                                                            @method('delete')
                                                            @csrf
                                                        </form>
                                                        <a class="dropdown-item text-dark" href="#"
                                                            onclick="what({{ $id }})">delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
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
