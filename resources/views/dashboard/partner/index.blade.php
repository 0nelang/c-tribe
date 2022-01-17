@extends('layouts.dashboard-main')

@section('main')

<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="/admin/partners/create" class="btn btn-primary mb-3">Create</a>
                        <table id="zero-conf" class="display" style="table-layout:fixed;
                        width:100%;">
                            <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Logo</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partner as $id => $part)

                                <tr>
                                    <td>{{ $part->index }}</td>
                                    <td><img src="{{ asset('storage/' . $part->logo ) }}" alt="{{ $part->logo }}" style="width: 100%"></td>
                                    <td style="">
                                        <div class="dropdown dropstart">
                                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item text-dark" href="/admin/people/{{ $part->id }}/edit">Edit</a></li>
                                                <li>
                                                    <form id="form-delete{{ $id }}" action="/admin/partners/delete" method="post" style="display: none">
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
                                    <th>Position</th>
                                    <th>Logo</th>
                                    <th>Option</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>

    @endsection
