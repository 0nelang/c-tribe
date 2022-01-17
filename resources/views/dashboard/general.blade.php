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
                                <label for="brand_navbar" class="form-label">Brand Image</label>
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $general->brand_navbar) }}" alt="{{ $general->brand_navbar }}" id="output">
                                </div>
                                <input class="form-control" type="file" id="brand_navbar" name="brand_navbar"
                                    value="{{ $general->brand_navbar }}">
                                @error('brand_navbar')
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
                            <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Footer</h5>
                                <div class="mb-3">
                                    <label for="background_footer" class="form-label">Background Image</label>
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $general->background_footer) }}" alt=".." id="output">
                                    </div>
                                    <input class="form-control" type="file" id="background_footer"
                                        name="background_footer">
                                    @error('background_footer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="brand_footer" class="form-label">Brand Image</label>
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $general->brand_footer) }}" alt=".. id="output"">
                                    </div>
                                    <input class="form-control" type="file" id="brand_footer" name="brand_footer">
                                    @error('brand_footer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email_footer" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email_footer" name="email_footer"
                                        value="{{ $general->email_footer }}">
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone_footer" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone_footer" name="phone_footer"
                                        value="{{ $general->phone_footer }}">
                                    @error('phone_footer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="social_footer" class="form-label">Social</label>
                                    <input type="text" class="form-control" id="social_footer" name="social_footer"
                                        value="{{ $general->social_footer }}">
                                    @error('social_footer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="addres_footer" class="form-label">Addres</label>
                                    <input type="text" class="form-control" id="addres_footer" name="addres_footer"
                                        value="{{ $general->addres_footer }}">
                                    @error('addres_footer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                        <div class="mb-3">
                                            <label for="cursor_image" class="form-label">Cursor Image</label>
                                            <div class="mb-3">
                                                <img src="{{ asset('storage/' . $general->cursor_image) }}" alt=".." id="output">
                                            </div>
                                            <input class="form-control" type="file" id="cursor_image"
                                                name="cursor_image">
                                            @error('cursor_image')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="hover_image" class="form-label">Hover Image Menu</label>
                                            <div class="mb-3">
                                                <img src="{{ asset('storage/' . $general->hover_image) }}" alt=".." id="output">
                                            </div>
                                            {{-- <img src="{{ asset('storage/' . $general->hover_image) }}" alt=".."> --}}
                                            <input class="form-control" type="file" id="hover_image" name="hover_image">
                                            @error('hover_image')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(function(){
                            $("#filePhoto").change(function(event) {
                                var x = URL.createObjectURL (event.target.files[0]);
                                $("#output").attr("src",x);
                                console.log(event);
                            });
                            });
                    
                        </script>
                        @endsection
