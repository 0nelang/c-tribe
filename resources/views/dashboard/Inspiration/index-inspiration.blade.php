@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('inspiration.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="logo-table" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>id</th>
                                        <th>Featured</th>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inspiration as  $pep)

                                    <tr>
                                        <td>{{ $pep->index }}</td>
                                        <td>{{ $pep->id }}</td>
                                        <td>{{ $pep->featured }}</td>
                                        <td>{!! $pep->name !!}</td>
                                        <td style="">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item text-dark" href="{{ route('inspiration.edit', ['inspiration' => $pep->id]) }}">Show</a></li>
                                                    <li>
                                                        <form id="form-delete{{ $pep->id }}" action="{{ route('inspiration.destroy',['inspiration' => $pep->id]) }}" method="post" style="display: none">
                                                            @method('delete')
                                                            @csrf
                                                        </form>
                                                        <a class="dropdown-item text-dark" href="#" onclick="what({{ $pep->id }})">delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Index</th>
                                        <th>id</th>
                                        <th>Featured</th>
                                        <th>Name</th>
                                        <th>Office</th>
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/reorder.js') }}">
        </script>

        <script>
            var table = $('#logo-table').DataTable({
                rowReorder: true,
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
                        url: "{{ url('') }}/admin/inspiration/position",
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
