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
                            <form action="{{ route('inspiration.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label id="mainImage" for="mainImage" class="form-label">Cover Image</label>
                                    <br>
                                    <img id="img-output" class="mb-3" style="max-height: 200px; max-width:400px;">
                                    <input class="form-control @error('mainImage') is-invalid @enderror" name="mainImage" type="file"
                                        id="imageFile" accept="image/*">
                                    @error('mainImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label is-invalid">Title</label>
                                    <textarea type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror editable" id="insname"
                                        aria-describedby="our-people-name"></textarea>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="date" class="form-label is-invalid">Date</label>
                                            <input type="text" name="date"
                                                class="form-control @error('date') is-invalid @enderror"
                                                id="exampleInputEmail1" aria-describedby="our-people-date">
                                            @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label">featured</label>
                                        <div class="form-check pt-2" onclick="hilzam()">
                                            <input type="checkbox" class="form-check-input" id="featured" name="featured">
                                            <label class="form-check-label" for="featured">featured</label>
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
                                    <textarea type="text" name="subTitle"
                                        class="form-control @error('subTitle') is-invalid @enderror editable"
                                        id="subTitle"></textarea>
                                    @error('subTitle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Desc</label>
                                    <textarea type="text" name="description"
                                        class="form-control text-white @error('description') is-invalid @enderror editable"
                                        id="desc" rows="5"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="form-label">video</label>
                                    <br>
                                    <video id="vid-output" controls
                                        style="display: none;max-height: 300px; max-width:600px;"></video>
                                    <input class="form-control @error('video') is-invalid @enderror" name="video"
                                        type="file" id="videoFile" accept="video/*">
                                    @error('video')
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

    </div>

    <script>
        $(function() {
            $("#imageFile").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#img-output").attr("src", x);
                console.log(event);
            });
        });

        $(function() {
            $("#videoFile").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#vid-output").show();
                $("#vid-output").attr("src", x);
                console.log(event);
            });
        });
    </script>
@endsection
@section('js')
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
