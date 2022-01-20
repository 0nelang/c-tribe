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
                            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-lg-4">
                                        <label for="brand" class="form-label is-invalid">Brand</label>
                                        <input type="text" name="brand"
                                        class="form-control @error('brand') is-invalid @enderror" id="exampleInputEmail1"
                                        aria-describedby="project-brand" value="{{ $project->brand }}">
                                        @error('brand')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="project" class="form-label">Project</label>
                                        <input type="text" name="project"
                                            class="form-control @error('project') is-invalid @enderror" id="project">
                                        @error('project')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="text" name="date"
                                            class="form-control @error('date') is-invalid @enderror" id="date">
                                        @error('date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="mb-3 col-lg-8">
                                        <label for="title" class="form-label">Title</label>
                                        <textarea type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror editable" id="title" 
                                        >{{ $project->title }}</textarea>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-lg-2 ps-3">
                                        <label class="form-label">type</label>
                                        <div class="d-flex pt-2 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type" id="type1" value="project" checked>
                                                <label class="form-check-label" for="type1">
                                                  project
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="type" id="type2" value="person">
                                                <label class="form-check-label" for="type2">
                                                  person
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label">featured</label>
                                        <div class="form-check pt-2">
                                            <input type="checkbox" class="form-check-input" id="featured" name="featured">
                                            <label class="form-check-label" for="featured">featured</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Desc</label>
                                    <textarea type="text" name="description"
                                        class="text-dark form-control @error('description') is-invalid @enderror editable"
                                        id="ck1">
                                            </textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body"
                                        class="form-control  @error('body') is-invalid @enderror editable"
                                        id="ck2" rows="5"></textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="mainImage" class="form-label">Main Image</label>
                                    <br>
                                    <img id="output" class="mb-3" style="max-height: 200px; max-width: 200px;">
                                    <input class="form-control @error('mainImage') is-invalid @enderror" name="mainImage"
                                        type="file" id="filePhoto" accept="image/*">
                                    @error('mainImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="otherImage" class="form-label">Other Image</label>
                                    <br>
                                    <input class="form-control @error('otherImage') is-invalid @enderror" name="otherImage[]"
                                        type="file" id="otherImage" accept="image/*" multiple="multiple">
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
        </script>
    @endsection

    @section('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
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
