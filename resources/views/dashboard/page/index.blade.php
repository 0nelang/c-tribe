@extends('layouts.dashboard-main')

@section('main')

<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table id="zero-conf" class="display" style="table-layout:fixed;
                            width:100%;">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Title</th>
                                    <th>Sub-title</th>
                                    <th>Extra</th>
                                    <th>Image</th>
                                    <th>option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $pag)
                                    <tr>
                                        <td>{!! $pag->page !!}</td>
                                        <td>{!! $pag->title !!}</td>
                                        <td>{!! $pag->sub_title !!}</td>
                                        <td> {!! $pag->extra !!}</td>
                                        <td><img src="{{ asset('storage/' . $pag->background_img ) }}"
                                                style="width: 100%"></td>
                                        <td style="text-align: center">
                                            <div class="dropdown dropstart">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item text-dark"
                                                            href="page/{{ $pag->id }}/edit">Edit</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Page</th>
                                    <th>Title</th>
                                    <th>Sub-title</th>
                                    <th>Extra</th>
                                    <th>Image</th>
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
