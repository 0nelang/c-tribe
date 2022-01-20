@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/reset" method="POST"id="admin-pass">
                                @method("Put")
                                @csrf
                                <input type="hidden" value="{{ auth()->user()->id }}" name="id">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="mb-3">
                                    <img id="output" class="mb-3">
                                    </div>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" id="email" value="{{ auth()->user()->email }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="admin" class="form-label">New Password</label>
                                    <div class="mb-3">
                                    <img id="output" class="mb-3">
                                    </div>
                                    <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" id="admin">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                <a class="btn btn-primary" onclick="change({{ auth()->user()->id }})">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <script>
        function change(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#admin-pass').submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }

    </script>
@endsection
