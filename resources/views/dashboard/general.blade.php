@extends('layouts.dashboard-main')

@section('main')

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
                        <form action="" method="" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Brand Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Footer</h5>
                                <p class="card-description">Here’s a quick example to demonstrate Bootstrap’s form
                                    styles. Keep reading
                                    for documentation on required classes, form layout, and more.</p>
                                <form action="" method="" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Background Image</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Brand Image</label>
                                        <input class="form-control" type="file" id="formFile">
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                        <p class="card-description">Here’s a quick example to demonstrate Bootstrap’s
                                            form styles. Keep reading
                                            for documentation on required classes, form layout, and more.</p>
                                        <form action="" method="" enctype="multipart/form-data">
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
