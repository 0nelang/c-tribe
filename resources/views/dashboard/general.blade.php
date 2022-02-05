@extends('layouts.dashboard-main')

@section('main')
    {{-- @dd($general) --}}
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Navbar</h5>
                            <form action="/admin/general/{{ $general->id }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="img1" class="form-label">Brand Image 1
                                        <div class="mb-2 mt-2">
                                            <img src="{{ asset('storage/' . $general->brand_navbar1) }}"
                                                alt="{{ $general->brand_navbar1 }}" id="output-img1"
                                                style="max-height: 200px; max-width: 200px;">
                                        </div>
                                    </label>
                                    <input class="form-control @error('brand_navbar1') is-invalid @enderror image-show"
                                        value="{{ $general->brand_navbar1 }}" name="brand_navbar1" type="file" id="img1"
                                        accept="image/*">
                                    @error('brand_navbar1')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="img2" class="form-label">Brand Image 2
                                        <div class="mb-2 mt-2">
                                            <img src="{{ asset('storage/' . $general->brand_navbar2) }}"
                                                alt="{{ $general->brand_navbar2 }}" id="output-img2"
                                                style="max-height: 200px; max-width: 200px;">
                                        </div>
                                    </label>
                                    <input class="form-control @error('brand_navbar2') is-invalid @enderror image-show"
                                        value="{{ $general->brand_navbar2 }}" name="brand_navbar2" type="file" id="img2"
                                        accept="image/*">
                                    @error('brand_navbar2')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $general->title }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Menu</h5>
                                    <div class="mb-3">
                                        <label for="img5" class="form-label">Hover Image
                                            Menu
                                            <div class="mb-2 mt-2">
                                                <img src="{{ asset('storage/' . $general->hover_image) }}"
                                                    alt="{{ $general->hover_image }}" id="output-img5"
                                                    style="max-height: 200px; max-width: 200px;">
                                            </div>
                                        </label>
                                        <input
                                            class="form-control @error('hover_image') is-invalid
                                        @enderror image-show"
                                            value="{{ $general->hover_image }}" name="hover_image" type="file" id="img5"
                                            accept="image/*">
                                        @error('hover_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>




                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                            {{-- <div class="row"> --}}
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Footer</h5>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="email_footer" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email_footer"
                                                            name="email_footer" value="{{ $general->email_footer }}">
                                                        @error('description')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="phone_footer" class="form-label">Phone</label>
                                                        <input type="text" class="form-control" id="phone_footer"
                                                            name="phone_footer" value="{{ $general->phone_footer }}">
                                                        @error('phone_footer')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="social_footer" class="form-label">Social</label>
                                                        <input type="text" class="form-control" id="social_footer"
                                                            name="social_footer" value="{{ $general->social_footer }}">
                                                        @error('social_footer')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="addres_footer" class="form-label">Addres</label>
                                                        <input type="text" class="form-control" id="addres_footer"
                                                            name="addres_footer" value="{{ $general->addres_footer }}">
                                                        @error('addres_footer')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="img6" class="form-label">Background
                                                Image
                                                <div class="mb-2 mt-2">
                                                    <img src="{{ asset('storage/' . $general->background_footer) }}"
                                                        alt="{{ $general->background_footer }}" id="output-img6"
                                                        style="max-height: 200px; max-width: 200px;">
                                                </div>
                                            </label>
                                            <input
                                                class="form-control @error('background_footer') is-invalid @enderror image-show"
                                                value="{{ $general->background_footer }}" name="background_footer"
                                                type="file" id="img6" accept="image/*">
                                            @error('background_footer')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="img7" class="form-label">Brand Image
                                                <div class="mb-2 mt-2">
                                                    <img src="{{ asset('storage/' . $general->brand_footer) }}"
                                                        alt="{{ $general->brand_footer }}" id="output-img7"
                                                        style="max-height: 200px; max-width: 200px;">
                                                </div>
                                            </label>
                                            <input
                                                class="form-control @error('brand_footer') is-invalid @enderror image-show"
                                                value="{{ $general->brand_footer }}" name="brand_footer" type="file"
                                                id="img7" accept="image/*">
                                            @error('brand_footer')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">General</h5>
                                                <div class="mb-3">
                                                    <label for="img8" class="form-label">Cursor
                                                        Image
                                                        <div class="mb-2 mt-2">
                                                            <img src="{{ asset('storage/' . $general->cursor_image) }}"
                                                                alt="{{ $general->cursor_image }}" id="output-img8"
                                                                style="max-height: 200px; max-width: 200px;">
                                                        </div>
                                                    </label>
                                                    <input
                                                        class="form-control @error('cursor_image') is-invalid
                                                        @enderror image-show"
                                                        value="{{ $general->cursor_image }}" name="cursor_image"
                                                        type="file" id="img8"
                                                        accept="image/*"  name="cursor_image">
                                                    @error('cursor_image')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="videoFile" class="form-label">Video
                                                        Background
                                                    <br>
                                                    <video id="vid-output"
                                                        class="mb-1 mt-2"
                                                        src="{{ asset('storage/' . $general->video_background) }}"
                                                        style="max-height: 300px; max-width: 300px;" controls></video>
                                                    </label>
                                                    <input
                                                        class="form-control @error('video_background') is-invalid @enderror"
                                                        name="video_background" type="file" id="videoFile" accept="video/*">
                                                    @error('video_background')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    $('.image-show').each(function() {
                                        var id;
                                        id = $(this).attr('id');
                                        if (id != '') {
                                            $("#" + id).change(function(event) {
                                                var x = URL.createObjectURL(event.target.files[0]);
                                                $("#output-" + id).attr("src", x);
                                                console.log(event);
                                            });
                                        }
                                    })

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
