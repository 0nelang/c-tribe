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
                        <p class="card-description">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep
                            reading
                            for documentation on required classes, form layout, and more.</p>
                        <form action="/admin/general/{{ $general->id }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="brand_image_n" class="form-label">Brand Image</label>
                                <input class="form-control" type="file" id="brand_image_n" name="brand_image_n">
                                @error('brand_image_n')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <hr class="mb-3">
                            <h5 class="card-title">Footer</h5>
                            <p class="card-description">Here’s a quick example to demonstrate Bootstrap’s form
                                styles. Keep reading
                                for documentation on required classes, form layout, and more.</p>
                            <div class="mb-3">
                                <label for="background_image" class="form-label">Background Image</label>
                                <input class="form-control" type="file" id="background_image" name="background_image">
                            </div>
                            <div class="mb-3">
                                <label for="brand_images" class="form-label">Brand Image</label>
                                <input class="form-control" type="file" id="brand_images" name="brand_image">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Social</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                            </div>

                            <hr>
                            <h5 class="card-title">General</h5>
                            <p class="card-description">Here’s a quick example to demonstrate Bootstrap’s
                                form styles. Keep reading
                                for documentation on required classes, form layout, and more.</p>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Cursor Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Hover Image Menu</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
