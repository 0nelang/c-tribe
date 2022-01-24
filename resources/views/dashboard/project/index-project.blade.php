@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('project.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="logo-table" class="display" style="table-layout:fixed;
                            width:100%;">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Id</th>
                                        <th>Brand</th>
                                        <th>Type</th>
                                        <th>Image</th>
                                        <th>Featured</th>
                                        <th>option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project as $id => $p)

                                    <tr>
                                        <td>{{ $p->index }}</td>
                                        <td>{{ $p->id }}</td>
                                        <td>{!! $p->brand !!}</td>
                                        <td>{{ $p->type }}</td>
                                        <td>@if ($p->featured == true)
                                            yes
                                        @endif</td>
                                        <td><img src="{{ asset('storage/' . $p->mainImage) }}" class="scale-down"  style="max-height: 100px"  alt="{{ $p->mainImage }}"></td>
                                        <td style="">
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
                                        <th>Index</th>
                                        <th>Id</th>
                                        <th>Brand</th>
                                        <th>Type</th>
                                        <th>Featured</th>
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
@section('js')
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/reorder.js') }}"></script>
        <script>
            var table = $('#logo-table').DataTable({
                rowReorder: true,
                columnDefs: [{
                    targets: [1,0],
                    visible: false,
                    searchable: false
                }]
            });

            table.on('row-reordered', function(e, diff, edit) {
                setTimeout(() => {
                    var obj_id = table.column(1).data().toArray();
                    console.log(obj_id);
                    $.ajax({
                        type: "post",
                        url: "{{ url('') }}/admin/project/position",
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
        </script>
    @endsection
