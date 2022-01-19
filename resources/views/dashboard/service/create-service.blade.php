@extends('layouts.dashboard-main')

@section('css')
    <style>
        .ck-content {
            color: black
        }

        .ck-editor__editable_inline {
            min-height: 100px;
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
                            <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="filePhoto" class="form-label">Logo</label>
                                    <div class="mb-3">
                                        <img id="output" class="mb-3">
                                    </div>
                                    <input class="form-control @error('logo') is-invalid @enderror" name="logo" type="file"
                                        id="filePhoto" accept="image/*">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="service" class="form-label">Service</label>
                                    <input class="form-control @error('service') is-invalid @enderror" name="service"
                                        type="text" id="service">
                                    @error('service')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea type="text" name="description"
                                        class="text-dark form-control @error('description') is-invalid @enderror editable"
                                        id="ck1"></textarea> @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body"
                                        class="text-dark form-control @error('body') is-invalid @enderror editable"
                                        id="ck2"></textarea> @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="fileImage" class="form-label">Image</label>
                                    <div class="mb-3">
                                        <img id="output" class="mb-3">
                                    </div>
                                    <input class="form-control @error('image') is-invalid @enderror" name="image"
                                        type="file" id="fileImage" accept="image/*">
                                    @error('image')
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

    @section('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
        <script>
            $('.editable').each(function() {
                var id;
                id = $(this).attr('id');
                if (id != '') {
                    ClassicEditor
                        .create(document.querySelector('#' + id))
                        .catch(error => {
                            console.error('error');
                        })
                }
            })
        </script>
    @endsection
