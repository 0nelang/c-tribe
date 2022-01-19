@extends('layouts.dashboard-main')

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
                            {{-- <div class="mb-3">
                                                                 
                                      <label for="page" class="form-label">Page</label>
                                      <input type="name" id="page" name="page" id="page" class="form-control text-disabled" placeholder="{{ $pafe->page }}"
                            value="{{ $pafe->page }}" >
                            @error('page')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div> --}}

                    <div class="mb-3">
                        <label for="page" class="form-label">page</label>
                        <input type="text" name="page" class="form-control @error('page') is-invalid @enderror"
                            value="{{ $pafe->page }}" id="page" value="{{ $pafe->page }}">
                        @error('page')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            value="{{ $pafe->title }}" id="title" value="{{ $pafe->title }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sub_title" class="form-label">Sub Title</label>
                        <input type="text" name="sub_title"
                            class="form-control @error('sub_title') is-invalid @enderror"
                            value="{{ $pafe->sub_title }}" id="sub_title" value="{{ $pafe->sub_title }}">
                        @error('sub_title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="extra" class="form-label">Extra</label>
                        <input type="text" name="extra" class="form-control @error('extra') is-invalid @enderror"
                            value="{{ $pafe->extra }}" id="extra" value="{{ $pafe->extra }}">
                        @error('extra')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="background_img" class="form-label">Image</label>
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $pafe->background_img) }}"
                                alt=".." id="output">
                        </div>
                        <input class="form-control" @error('background_img') is-invalid @enderror"
                            value="{{ $pafe->background_img }}" name="background_img" type="file" id="filePhoto"
                            accept="image/*">
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
    $(function () {
        $("#filePhoto").change(function (event) {
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
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

</script>
@endsection
