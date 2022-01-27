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
                            <form action="{{ route('flagship.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="mainImage" class="form-label">Main Image</label>
                                        <br>
                                        <img id="out" class="mb-3" style="max-height: 200px; max-width: 300px">
                                        <input class="form-control @error('mainImage') is-invalid @enderror"
                                            name="mainImage" type="file" id="photo" accept="image/*">
                                        @error('mainImage')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label for="title" class="form-label is-invalid">Title</label>
                                            <textarea type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror editable"
                                                id="titlef" aria-describedby="title">{{ old('title') }}</textarea>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="text" name="date"
                                                class="form-control @error('date') is-invalid @enderror" id="date" value="{{ old('date') }}">
                                            @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-lg-2">
                                            <label class="form-label">featured</label>
                                            <div class="form-check pt-2" onclick="hilzam()">
                                                <input type="checkbox" class="form-check-input" name="featured"
                                                    id="featured">
                                                <label class="form-check-label" for="featured">featured</label>
                                            </div>
                                        </div>
                                    </div>
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
                                        id="subTitle">{{ old('subTitle') }}</textarea>
                                    @error('subTitle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Desc</label>
                                    <textarea type="text" name="description"
                                        class="text-dark form-control @error('description') is-invalid @enderror editable"
                                        id="ck2">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body"
                                        class="form-control  @error('body') is-invalid @enderror editable" id="ck3"
                                        rows="5">{{ old('body') }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="detailImage" class="form-label">Detail Image</label>
                                    <br>
                                    <img id="output" class="mb-3" style="max-height: 200px; max-width: 300px">
                                    <input class="form-control @error('detailImage') is-invalid @enderror"
                                        name="detailImage" type="file" id="filePhoto" accept="image/*" value="{{ old('detailImage') }}">
                                    @error('detailImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="otherImage" class="form-label">Other Image</label>
                                    <br>
                                    <img id="output" class="mb-3">
                                    <input class="form-control @error('otherImage') is-invalid @enderror" name="mainImage[]"
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
    <script>
        function hilzam() {
            if ($('#featured').prop('checked') == true) {
                $('.layout').show();
            } else {
                $('.layout').hide();
            }
        };

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
