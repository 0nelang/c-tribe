@extends('layouts.dashboard-main')

@section('css')
    <style>
        .note-editable {
            background: #2B3B52;
            border-color: #2B3B52;
            color: white;
        }

    </style>
@endsection

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/people" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label is-invalid">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" aria-describedby="our-people-name" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="filePhoto" class="form-label">Photo
                                    <br>
                                    <img id="output" class="mb-3" style="max-height: 200px; max-width: 200px;">
                                    </label>
                                    <input class="form-control @error('photo') is-invalid @enderror" name="photo"
                                        type="file" id="filePhoto" accept="image/*" {{ old('photo') }}>
                                    @error('photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="editor" class="form-label">Desc</label>
                                    <textarea type="name" name="description"
                                        class="form-control text-white @error('description') is-invalid @enderror editable"
                                        id="editor">{{ old('description') }}</textarea>
                                    @error('description')
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
            $(function() {
                $("#filePhoto").change(function(event) {
                    var x = URL.createObjectURL(event.target.files[0]);
                    $("#output").attr("src", x);
                    console.log(event);
                });
            });
        </script>


    @endsection

    @section('ck-editor')
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

        <script>
            $(document).ready(function() {
                var id;
                $('.editable').each(function() {
                    id = $(this).attr('id');
                    if (id != '') {
                        $('#' + id).summernote({
                            height: 120,
                        });
                    }
                })
            });
        </script>
    @endsection
