@extends('layouts.dashboard-main')

@section('css')
    <style>
        .note-editable{
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
                            <form action="/admin/page/{{ $pafe->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("put")

                                <div class="mb-3">
                                    <label for="page" class="form-label">page</label>
                                    <input type="text" name="page" class="form-control @error('page') is-invalid @enderror"
                                        value="{{ $pafe->page }}" id="page" disabled>
                                    @error('page')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <textarea type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror editable" id="title"
                                        rows="5">{{ $pafe->title }}</textarea>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">sub_Title</label>
                                    <textarea type="text" name="sub_title"
                                        class="form-control  @error('sub_title') is-invalid @enderror editable" id="subTitle"
                                        rows="5">{{ $pafe->sub_title }}</textarea>
                                    @error('sub_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="background_img" class="form-label">Image</label>
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $pafe->background_img) }}" alt="{{ $pafe->background_img }}" id="output"  style="max-height: 200px; max-width:400px;">
                                    </div>
                                    <input class="form-control" @error('background_img') is-invalid @enderror"
                                        value="{{ $pafe->background_img }}" name="background_img" type="file"
                                        id="filePhoto" accept="image/*">
                                    @error('background_img')
                                        <small class="text-danger">{{ $message }}</small>
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
        <script>
            $(document).ready(function () {
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
