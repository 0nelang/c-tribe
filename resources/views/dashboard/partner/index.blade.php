@extends('layouts.dashboard-main')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/rr-1.2.8/datatables.min.css" />
@endsection

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="/admin/partners/create" class="btn btn-primary mb-3">Create</a>
                            <table id="logo-table" class="display" style="table-layout:fixed;
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
                                            <td><img src="{{ asset('storage/' . $part->logo) }}" alt="{{ $part->logo }}"
                                                    style="height: 89px"></td>
                                            <td style="">
                                                <div class="dropdown dropend">
                                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item text-dark"
                                                                href="/admin/people/{{ $part->id }}/edit">Edit</a></li>
                                                        <li>
                                                            <form id="form-delete{{ $id }}"
                                                                action="/admin/partners/delete" method="post"
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
    @section('js')


        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/rr-1.2.8/datatables.min.js"></script>

        <script>
            var table = $('#logo-table').DataTable({
                rowReorder: true
            });

            table.on('row-reorder', function(e, diff, edit) {
                console.log(edit);
                var result = 'Reorder started on row: ' + edit.triggerRow.data()[1] + '<br>';
                var newIndex, oldIndex;
                for (var i = 0, ien = diff.length; i < ien; i++) {
                    newIndex = diff[i].newData;
                    oldIndex = diff[i].oldData;
                }

            });
        </script>
    @endsection
