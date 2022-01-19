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
                                    <label for="filePhoto" class="form-label">Logo</label>
                                    <div class="mb-3">
                                        <img id="output" class="mb-3"
                                            src="{{ asset('storage/' . $service->logo) }}"
                                            style="max-height: 200px; max-width: 200px;">
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
                                        type="text" id="service" value="{{ $service->service }}">
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
                                        id="ck1">{{ $service->description }}</textarea> @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body"
                                        class="text-dark form-control @error('body') is-invalid @enderror editable"
                                        id="ck2">{{ $service->body }}</textarea> @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="fileImage" class="form-label">Image</label>
                                    <div class="mb-3">
                                        <img id="output" class="mb-3"
                                            src="{{ asset('storage/' . $service->image) }}"
                                            style="max-height: 200px; max-width: 200px;">
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
