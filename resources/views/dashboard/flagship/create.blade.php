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
                        <form action="{{ route('flagship.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="title" class="form-label is-invalid">Title</label>
                                        <input type="text" name="title"
<<<<<<< HEAD
                                            class="form-control @error('title') is-invalid @enderror" editable
                                            id="ck1" aria-describedby="title">
=======
                                            class="form-control @error('title') is-invalid @enderror editable"
                                            id="titleflag" aria-describedby="title">
>>>>>>> e3b1b6e8af6a26994681c6533aa3eb6ec19d0dbe
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
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

                    <div class="mb-3">
                        <label for="description" class="form-label">Desc</label>
                        <textarea type="text" name="description"
                            class="text-dark form-control @error('description') is-invalid @enderror editable" id="ck2">
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
                            class="form-control  @error('body') is-invalid @enderror editable" id="ck3"
                            rows="5"></textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="mainImage" class="form-label">Main Image</label>
                        <br>
                        <img id="out" class="mb-3" style="max-height: 200px; max-width: 300px">
                        <input class="form-control @error('mainImage') is-invalid @enderror" name="mainImage[]"
                            type="file"  id="photo" accept="image/*">
                        @error('mainImage')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="detailImage" class="form-label">Detail Image</label>
                        <br>
                        <img id="output" class="mb-3" style="max-height: 200px; max-width: 300px">
                        <input class="form-control @error('detailImage') is-invalid @enderror" name="detailImage"
                            type="file" id="filePhoto" accept="image/*">
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
    $(function () {
        $("#filePhoto").change(function (event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#output").attr("src", x);
            console.log(event);
        });
    });

    $(function () {
        $("#photo").change(function (event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#out").attr("src", x);
            console.log(event);
        });
    });

</script>
@endsection

@section('js')
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
