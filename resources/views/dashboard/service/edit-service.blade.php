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
                            <form action="{{ route('service.update', ['service' => $service->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="filePhoto" class="form-label">Logo
                                    <div class="mb-3">
                                        <img id="output" class="mt-3"
                                            src="{{ asset('storage/' . $service->logo) }}"
                                            style="max-height: 200px; max-width: 200px;">
                                    </div></label>
                                    <input class="form-control @error('logo') is-invalid @enderror" name="logo" type="file"
                                        id="filePhoto" accept="image/*">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>



                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <textarea type="text" name="title"
                                        class="text-dark form-control @error('title') is-invalid @enderror editable"
                                        id="ck1">{{ $service->title }}</textarea> @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea type="text" name="description"
                                        class="text-dark form-control @error('description') is-invalid @enderror editable"
                                        id="ck2">{{ $service->description }}</textarea> @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body"
                                        class="text-dark form-control @error('body') is-invalid @enderror editable"
                                        id="ck3">{{ $service->body }}</textarea> @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="fileImage" class="form-label">Detail Image</label>
                                                <input class="form-control @error('image') is-invalid @enderror" name="image"
                                                type="file" id="fileImage" accept="image/*">
                                                <div class="mb-3">
                                                    <img id="output2" class="mt-3"
                                                        src="{{ asset('storage/' . $service->image) }}"
                                                        style="max-height: 200px; max-width: 200px;" alt="{{ $service->image }}">
                                                </div>
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="service" class="form-label">Service</label>
                                            <input class="form-control @error('service') is-invalid @enderror" name="service"
                                                type="text" id="service" value="{{ $service->service }}">
                                            @error('service')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Unpublished</label>
                                            <div class="form-check form-switch pt-2">
                                                <input class="form-check-input" type="checkbox" id="unpublished" name="unpublished"
                                                @if ($service->service)
                                                checked
                                                @endif>
                                                <label class="form-check-label" for="unpublished">Unpublished</label>
                                            </div>
                                        </div>
                                    </div>
                                  </div>




                                <button type="submit" class="btn btn-primary">Update</button>
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
            $(function() {
                $("#fileImage").change(function(event) {
                    var x = URL.createObjectURL(event.target.files[0]);
                    $("#output2").attr("src", x);
                    console.log(event);
                });
            });
        </script>
    @endsection

    @section('js')
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
