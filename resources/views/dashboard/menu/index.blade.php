@extends('layouts.dashboard-main')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.bootstrap4.min.css" />
@endsection

@section('main')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="/admin/menu/reset-potition" class="btn btn-primary mb-3">Reset Position</a>
                            <table id="logo-table" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>position</th>
                                        <th>Id</th>
                                        <th>Service</th>
                                        <th>Logo</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody id="images">
                                    @foreach ($menu as $id => $part)
                                        <tr>
                                            <td>{{ $part->index }}</td>
                                            <td>{{ $part->id }}</td>
                                            <td>{{ $part->default_name }}</td>
                                            <td>{{ $part->default_url }}</td>
                                            <td>
                                                <div class="dropdown dropend">
                                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item text-dark"
                                                                href="{{ route('menu.edit', ['menu' => $part->id]) }}">Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
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

    @section('js')
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/reorder.js') }}">
        </script>

        <script>
            var table = $('#logo-table').DataTable({
                rowReorder: true,
                columnDefs: [{
                    targets: [1, 0],
                    visible: false,
                    searchable: false
                }]
            });

            table.on('row-reorder', function(e, diff, edit) {
                var result = 'Reorder started on row: ' + edit.triggerRow.data()[1] + '<br>';
                var newIndex, oldIndex;
                for (var i = 0, ien = diff.length; i < ien; i++) {
                    var rowData = table.row(diff[i].node).data();

                    newIndex = diff[i].newData;
                    oldIndex = diff[i].oldData;
                }


            });
            table.on('row-reordered', function(e, diff, edit) {
                setTimeout(() => {
                    var obj_id = table.column(1).data().toArray();
                    console.log(obj_id);
                    $.ajax({
                        type: "post",
                        url: "{{ url('') }}/admin/menu/position",
                        dataType: "json",
                        data: {
                            id: obj_id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });
                }, 2000);
            });


            // table.on('row-reordered', function(e, diff, edit) {
            //     var result = 'Reorder started on row: ' + edit.triggerRow.data()[1] + '<br>';
            //     var newIndex, oldIndex;
            //     for (var i = 0, ien = diff.length; i < ien; i++) {
            //         var rowData = table.row(diff[i].node).data();

            //         newIndex = diff[i].newData;
            //         oldIndex = diff[i].oldData;
            //     }
            //     var id = edit.triggerRow.data()[1];

            // });
        </script>
    @endsection
