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
                            <form action="{{ route('flagship.update', ['flagship' => $flagship->id]) }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="mainImage" class="form-label">Cover Image</label>
                                        <br>
                                        <img id="output" class="mb-3"
                                            src="{{ asset('storage/' . $flagship->mainImage) }}" alt="{{ $flagship->mainImage }}" style="max-height: 200px; max-width: 300px">
                                        <input class="form-control @error('mainImage') is-invalid @enderror" name="mainImage"
                                            type="file" id="filePhoto" accept="image/*">
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
                                            id="titlef" aria-describedby="title">{{ $flagship->title }}</textarea>
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
                                                class="form-control @error('date') is-invalid @enderror" id="date" value="{{ $flagship->date }}">
                                            @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-lg-2">
                                            <label class="form-label">featured</label>
                                            <div class="form-check pt-2">
                                                <input type="checkbox" class="form-check-input" id="featured" name="featured">
                                                <label class="form-check-label" for="featured">featured</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="mb-3">
                                    <label for="subTitle" class="form-label">Sub Title</label>
                                    <textarea type="text" name="subTitle"
                                        class="form-control @error('subTitle') is-invalid @enderror editable"
                                        id="subTitle">{{ $flagship->subTitle }}</textarea>
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
                                        id="ck1">{{ $flagship->description }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body"
                                        class="form-control  @error('body') is-invalid @enderror editable" id="ck2"
                                        rows="5">{{ $flagship->body }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="detailImage" class="form-label">Detail Image</label>
                                    <br>
                                    <img id="out" class="mb-3"
                                        src="{{ asset('storage/' . $flagship->detailImage) }}"  style="max-height: 200px; max-width: 300px">
                                    <input class="form-control @error('detailImage') is-invalid @enderror" name="detailImage"
                                        type="file" id="photo" accept="image/*">
                                    @error('detailImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="otherImage" class="form-label">Other Image</label>
                                    <br>
                                    <img id="output" class="mb-3"  style="max-height: 200px; max-width: 300px">
                                    <input class="form-control @error('otherImage') is-invalid @enderror" name="otherImage[]"
                                        type="file" id="otherImage" accept="image/*" multiple="multiple">
                                    @error('otherImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                @foreach ($otherImage as $item)
                                    <a id="image{{ $item->id }}" href="#" onclick="what({{ $item->id }})">
                                        <img src="{{ asset('storage/' . $item->otherImage) }}" alt=""
                                            style="max-height: 100px; max-width: 100px;">
                                    </a>
                                @endforeach
                                <br>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
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
            function what(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "post",
                            url: "{{ url('') }}/admin/flagship/image/" + id,
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: "json",
                            success: function(response) {
                                $('#image' + id).remove();
                                console.log(response);
                            }
                        });
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }

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
