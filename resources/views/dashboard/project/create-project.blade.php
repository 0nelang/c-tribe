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
                            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="filePhoto" class="form-label">Cover Image
                                            <br>
                                            <img id="output" class="mt-2 mb-3"
                                                style="max-height: 200px; max-width: 300px;">
                                        </label>
                                        <input class="form-control @error('mainImage') is-invalid @enderror"
                                            name="mainImage" type="file" id="filePhoto" accept="image/*"
                                            value="{{ old('mainImage') }}">
                                        @error('mainImage')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <textarea type="text" name="title" class="form-control @error('title') is-invalid @enderror editable"
                                            id="title">{{ old('title') }}</textarea>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-lg-4">
                                        <label for="brand" class="form-label is-invalid">Brand</label>
                                        <input type="text" name="brand"
                                            class="form-control @error('brand') is-invalid @enderror" id="brand"
                                            aria-describedby="project-brand" value="{{ old('brand') }}">
                                        @error('brand')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="project" class="form-label">Project</label>
                                        <input type="text" name="project"
                                            class="form-control @error('project') is-invalid @enderror" id="project"
                                            value="{{ old('project') }}">
                                        @error('project')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-lg-4">
                                        <label for="date" class="form-label">Date Of Project</label>
                                        <input type="date" name="date"
                                            class="form-control @error('date') is-invalid @enderror" id="date"
                                            value="{{ old('date') }}">
                                        @error('date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Type</label>
                                            <div class="d-flex pt-2 ">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type" id="type1"
                                                        value="project" checked>
                                                    <label class="form-check-label" for="type1">
                                                        project
                                                    </label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="type" id="type2"
                                                        value="person">
                                                    <label class="form-check-label" for="type2">
                                                        person
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Featured</label>
                                            <div class="form-check pt-2" onclick="hilzam()">
                                                <input type="checkbox" class="form-check-input" id="featured"
                                                    name="featured">
                                                <label class="form-check-label" for="featured">featured</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Unpublished</label>
                                            <div class="form-check form-switch pt-2">
                                                <input class="form-check-input" type="checkbox" id="unpublished" name="unpublished">
                                                <label class="form-check-label" for="unpublished">Unpublished</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="row">
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout" style="display: none">
                                        <input type="radio" class="form-check-input" id="featured1" name="layout" value="1">
                                        <label class="form-check-label" for="featured1"><img
                                                src="/images/layouts/c-tribe home.jpeg" width="250px"></label>
                                    </div>
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout" style="display: none">
                                        <input type="radio" class="form-check-input" id="featured2" name="layout" value="2">
                                        <label class="form-check-label" for="featured2"><img
                                                src="/images/layouts/c-tribe home1.jpeg" width="250px"></label>
                                    </div>
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout" style="display: none">
                                        <input type="radio" class="form-check-input" id="featured3" name="layout" value="3">
                                        <label class="form-check-label" for="featured3"><img
                                                src="/images/layouts/c-tribe home2.jpeg" width="250px"></label>
                                    </div>
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout" style="display: none">
                                        <input type="radio" class="form-check-input" id="featured4" name="layout" value="4">
                                        <label class="form-check-label" for="featured4"><img
                                                src="/images/layouts/c-tribe home3.jpeg" width="250px"></label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="subTitle" class="form-label">Sub Title</label>
                                    <textarea type="text" name="subTitle" class="form-control @error('subTitle') is-invalid @enderror editable"
                                        id="subTitle">{{ old('subTitle') }}</textarea>
                                    @error('subTitle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Desc</label>
                                    <textarea type="text" name="description" class="text-dark form-control @error('description') is-invalid @enderror editable"
                                        id="ck1">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-lg-4">
                                        <div class="mb-3">
                                            <label for="detail1" class="form-label">Detail 1</label>
                                            <textarea type="text" name="detail1" class="form-control @error('detail1') is-invalid @enderror editable"
                                                id="detail1">{{ old('detail1') }}</textarea>
                                            @error('detail1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <label for="insta1" class="form-label">Insta 1</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" name="insta1" value="{{ old('insta1') }}" id="insta1"
                                                class="form-control @error('insta1') is-invalid @enderror"
                                                placeholder="Username">
                                            @error('insta1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <div class="mb-3">
                                            <label for="detail2" class="form-label">Detail 2</label>
                                            <textarea type="text" name="detail2" class="form-control @error('detail2') is-invalid @enderror editable"
                                                id="detail2">{{ old('detail2') }}</textarea>
                                            @error('detail2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <label for="insta2" class="form-label">Insta 2</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" name="insta2" value="{{ old('insta2') }}" id="insta2"
                                                class="form-control @error('insta2') is-invalid @enderror"
                                                placeholder="Username">
                                            @error('insta2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <div class="mb-3">
                                            <label for="detail3" class="form-label">Detail 3</label>
                                            <textarea type="text" name="detail3" class="form-control @error('detail3') is-invalid @enderror editable"
                                                id="detail3">{{ old('detail3') }}</textarea>
                                            @error('detail3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <label for="insta3" class="form-label">Insta 3</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" name="insta3" value="{{ old('insta3') }}" id="insta3"
                                                class="form-control @error('insta3') is-invalid @enderror"
                                                placeholder="Username">
                                            @error('insta3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body" class="form-control  @error('body') is-invalid @enderror editable" id="ck2"
                                        rows="5">{{ old('body') }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Detail Image
                                        <br>
                                        <img id="out" class="mt-2 mb-3" style="max-height: 200px; max-width: 300px">
                                    </label>
                                    <input class="form-control @error('detailImage') is-invalid @enderror"
                                        name="detailImage" type="file" id="photo" accept="image/*"
                                        value="{{ old('detailImage') }}">
                                    @error('detailImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="otherImage" class="form-label">Other Image</label>
                                    <br>
                                    <input class="form-control @error('otherImage') is-invalid @enderror"
                                        name="otherImage[]" type="file" id="otherImage" accept="image/*"
                                        multiple="multiple">
                                    @error('otherImage')
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

            $(function() {
                $("#photo").change(function(event) {
                    var x = URL.createObjectURL(event.target.files[0]);
                    $("#out").attr("src", x);
                    console.log(event);
                });
            });
        </script>
    @endsection

    @section('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
        <script>
            function hilzam() {
                if ($('#featured').prop('checked') == true) {
                    $('.layout').show();
                } else {
                    $('.layout').hide();
                }
            };
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
