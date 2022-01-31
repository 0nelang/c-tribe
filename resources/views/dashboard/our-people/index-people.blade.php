@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('people.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="logo-table" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>index</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>photo</th>
                                        <th style="text-align: center">option</th>
                                    </tr>
                                </thead>
                                <tbody id="images">
                                    @foreach ($people as $id => $pep)

                                        <tr>
                                            <td>{{ $pep->index }}</td>
                                            <td>{{ $pep->id }}</td>
                                            <td>{{ $pep->name }}</td>
                                            <td>{{ $pep->title }}</td>
                                            <td>
                                                {{-- <img  src="paris.jpg" alt="Paris" style="width:200px;height:400px"> --}}
                                                <img onclick="image()" class="scale-down" src="{{ asset('storage/' . $pep->photo) }}"
                                                    style="max-height: 100px" alt="{{ $pep->photo }}"></td>
                                            <td style="text-align: center">
                                                {{-- <div class="dropdown dropstart">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> --}}
                                                <div class="dropdown dropright">
                                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item text-dark"
                                                                href="/admin/people/{{ $pep->id }}/edit">Show</a></li>
                                                        <li>
                                                            <form id="form-delete{{ $id }}"
                                                                action="{{ route('people.destroy', ['person' => $pep->id]) }}"
                                                                method="post" style="display: none">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                            <a class="dropdown-item text-dark" href="#"
                                                                onclick="what({{ $id }})">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>index</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>photo</th>
                                        <th style="text-align: center">option</th>
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
                        url: "{{ url('') }}/admin/people/position",
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
