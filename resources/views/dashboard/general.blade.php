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
                                <label for="brand_image_navbar" class="form-label">Brand Image</label>
                                <input class="form-control" type="file" id="brand_image_navbar"
                                    name="brand_image_navbar">
                                @error('brand_image_navbar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ $general->description_navbar }}">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Footer</h5>
                                    <div class="mb-3">
                                        <label for="background_image" class="form-label">Background Image</label>
                                        <input class="form-control" type="file" id="background_image"
                                            name="background_image">
                                        @error('background_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="brand_image_footer" class="form-label">Brand Image</label>
                                        <input class="form-control" type="file" id="brand_image_footer"
                                            name="brand_image_footer">
                                        @error('brand_image_footer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="te" class="form-control" id="" name="emailHelp"
                                            value="{{ $general->email_footer }}">
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $general->phone_footer }}">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="social" class="form-label">Social</label>
                                        <input type="text" class="form-control" id="social" name="social"
                                            value="{{ $general->social_footer }}">
                                        @error('social')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="addres" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="addres" name="addres"
                                            value="{{ $general->addres_footer }}">
                                        @error('addres')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                            <div class="mb-3">
                                                <label for="cursor_image" class="form-label">Cursor Image</label>
                                                <input class="form-control" type="file" id="cursor_image"
                                                    name="cursor_image">
                                                @error('cursor_image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="hover_image" class="form-label">Hover Image Menu</label>
                                                <input class="form-control" type="file" id="hover_image"
                                                    name="hover_image">
                                                @error('hover_image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endsection
