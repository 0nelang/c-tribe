@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/partners" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="filePhoto" class="form-label">Logo
                                    <div >
                                    <img id="output" class="mt-2"mb-2 style="max-height: 200px; max-width: 200px;">
                                    </div>
                                    </label>
                                    <input class="form-control @error('logo') is-invalid @enderror" name="logo" type="file" id="filePhoto" >
                                    @error('logo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>

    <script>
        $(function(){
        $("#filePhoto").change(function(event) {
            var x = URL.createObjectURL (event.target.files[0]);
            $("#output").attr("src",x);
            console.log(event);
        });
        });

    </script>
@endsection
