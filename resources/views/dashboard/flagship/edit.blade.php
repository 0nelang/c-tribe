@extends('layouts.dashboard-main')
@section('css')
    <style>
        .ck-content {
            color: black
        }

        .ck-editor__editable_inline {
            min-height: 100px;
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
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label for="title" class="form-label is-invalid">Title</label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                id="exampleInputEmail1" aria-describedby="title" value="{{ $flagship->title }}">
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
                                            class="form-control @error('date') is-invalid @enderror" id="date" value="{{ $flagship->date }}">
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
                                    <label for="mainImage" class="form-label">Main Image</label>
                                    <br>
                                    <img id="output" class="mb-3"
                                        src="{{ asset('storage/' . $flagship->mainImage) }}" alt="{{ $flagship->mainImage }}">
                                    <input class="form-control @error('mainImage') is-invalid @enderror" name="mainImage"
                                        type="file" id="filePhoto" accept="image/*">
                                    @error('mainImage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="detailImage" class="form-label">Detail Image</label>
                                    <br>
                                    <img id="out" class="mb-3"
                                        src="{{ asset('storage/' . $flagship->detailImage) }}" alt="{{ $flagship->detailImage }}">
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
                                    <img id="output" class="mb-3">
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
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
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

            $('.editable').each(function() {
                var id;
                id = $(this).attr('id');
                if (id != '') {
                    ClassicEditor
                        .create(document.querySelector('#' + id))
                        .catch(error => {
                            console.error('error');
                        })
                }
            })
        </script>
    @endsection
