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
                                        <label for="photo" class="form-label">Main Image
                                            <br>
                                            <img id="out" class="mb-2 mt-2"
                                                style="max-height: 200px; max-width: 300px"></label>
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
                                            <textarea type="text" name="title" class="form-control @error('title') is-invalid @enderror editable" id="titlef"
                                                aria-describedby="title">{{ old('title') }}</textarea>
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
                                            <input type="date" name="date"
                                                class="form-control @error('date') is-invalid @enderror" id="date"
                                                value="{{ old('date') }}">
                                            @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-lg-2">
                                            <label class="form-label">Featured</label>
                                            <div class="form-check pt-2" onclick="hilzam()">
                                                <input type="checkbox" class="form-check-input" name="featured"
                                                    id="featured">
                                                <label class="form-check-label" for="featured">featured</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-2">
                                            <label class="form-label">Unpublished</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="unpublished"
                                                    name="unpublished">
                                                <label class="form-check-label" for="unpublished">Unpublished</label>
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



                                <div class="mb-3 layout" style="display: none">
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
                                        id="ck2">{{ old('description') }}</textarea>
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
                                        {{-- <label for="insta1" class="form-label">Insta 1</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" name="insta1" value="{{ old('insta1') }}" id="insta1" class="form-control @error('insta1') is-invalid @enderror" placeholder="Username">
                                            @error('insta1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                          </div> --}}
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
                                        {{-- <label for="insta2" class="form-label">Insta 2</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" name="insta2" value="{{ old('insta2') }}" id="insta2" class="form-control @error('insta2') is-invalid @enderror" placeholder="Username">
                                            @error('insta2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                          </div> --}}
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
                                        {{-- <label for="insta3" class="form-label">Insta 3</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" name="insta3" value="{{ old('insta3') }}" id="insta3" class="form-control @error('insta3') is-invalid @enderror" placeholder="Username">
                                            @error('insta3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                          </div> --}}
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="tags" class="form-label">Tags</label>
                                    <select name="tags[]" id="tag" class="form-select" multiple="multiple">
                                        {{-- @foreach ($tags as $tag)
                                            <option value="{{ $tag->tag }}"
                                                @if (in_array($tag->tag, $oldTag)) selected @endif>{{ $tag->tag }}
                                            </option>
                                        @endforeach --}}
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body" class="form-control  @error('body') is-invalid @enderror editable" id="ck3"
                                        rows="5">{{ old('body') }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="filePhoto" class="form-label">Detail Image
                                        <br>
                                        <img id="output" class="mb-2 mt-2"
                                            style="max-height: 200px; max-width: 300px"></label>
                                    <input class="form-control @error('detailImage') is-invalid @enderror"
                                        name="detailImage" type="file" id="filePhoto" accept="image/*"
                                        value="{{ old('detailImage') }}">
                                    @error('detailImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="videoFile" class="form-label">Video</label>
                                    <br>
                                    <video id="vid-output" controls class="mb-2"
                                        style="display: none;max-height: 300px; max-width:600px;"></video>
                                    <input class="form-control @error('video') is-invalid @enderror" name="video"
                                        type="file" id="videoFile" accept="video/*">
                                    @error('video')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}

                                <div class="mb-3">
                                    <label for="otherImage" class="form-label">Other Image</label>
                                    <br>
                                    <img id="output" class="mb-3">
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
    </div>

    <script>
        $(document).ready(function() {

            $("#tag").select2({
                placeholder: "select tag",
                tags: true
            });

        });

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
