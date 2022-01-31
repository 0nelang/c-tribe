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
                            <form action="{{ route('project.update', ['project' => $project->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="mainImage" class="form-label">Cover Image</label>
                                        <br>
                                        <img id="output" class="mb-3"
                                            src="{{ asset('storage/' . $project->mainImage) }}"
                                            style="max-height: 200px; max-width: 200px;">
                                        <input class="form-control @error('mainImage') is-invalid @enderror"
                                            name="mainImage" type="file" id="filePhoto" accept="image/*">
                                        @error('mainImage')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-lg-4">
                                        <label for="brand" class="form-label is-invalid">Brand</label>
                                        <input type="text" name="brand"
                                            class="form-control @error('brand') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="project-brand"
                                            value="{{ $project->brand }}">
                                        @error('brand')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="project" class="form-label">Project</label>
                                        <input type="text" name="project"
                                            class="form-control @error('project') is-invalid @enderror" id="project"
                                            value="{{ $project->project }}">
                                        @error('project')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="text" name="date"
                                            class="form-control @error('date') is-invalid @enderror" id="date"
                                            value="{{ $project->date }}">
                                        @error('date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="mb-3 col-lg-8">
                                        <label for="title" class="form-label">Title</label>
                                        <textarea type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror editable"
                                            id="title">{{ $project->title }}</textarea>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-2 ps-3">
                                        <label class="form-label">type</label>
                                        <div class="d-flex pt-2 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type" id="type1"
                                                    value="project"
                                                    {{ $project->type === 'project' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="type1">
                                                    project
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="type" id="type2"
                                                    value="person" {{ $project->type === 'person' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="type2">
                                                    person
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-lg-2">
                                        <label class="form-label">featured</label>
                                        <div class="form-check pt-2" onclick="hilzam()">
                                            <input type="checkbox" class="form-check-input" id="featured" name="featured"
                                                @if ($project->featured)
                                            checked
                                            @endif>
                                            <label class="form-check-label" for="featured">featured</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout"
                                        style="display: {{ $project->featured == true ? 'block' : 'none' }}">
                                        <input type="radio" class="form-check-input" id="featured1" name="layout" value="1"
                                            {{ $project->featured == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="featured1"><img
                                                src="/images/layouts/c-tribe home.jpeg" width="250px"></label>
                                    </div>
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout"
                                        style="display: {{ $project->featured == true ? 'block' : 'none' }}">
                                        <input type="radio" class="form-check-input" id="featured2" name="layout" value="2"
                                            {{ $project->featured == 2 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="featured2"><img
                                                src="/images/layouts/c-tribe home1.jpeg" width="250px"></label>
                                    </div>
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout"
                                        style="display: {{ $project->featured == true ? 'block' : 'none' }}">
                                        <input type="radio" class="form-check-input" id="featured3" name="layout" value="3"
                                            {{ $project->featured == 3 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="featured3"><img
                                                src="/images/layouts/c-tribe home2.jpeg" width="250px"></label>
                                    </div>
                                    <div class="form-check pt-2 mb-3 col-lg-3 layout"
                                        style="display: {{ $project->featured == true ? 'block' : 'none' }}">
                                        <input type="radio" class="form-check-input" id="featured4" name="layout" value="4"
                                            {{ $project->featured == 4 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="featured4"><img
                                                src="/images/layouts/c-tribe home3.jpeg" width="250px"></label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="subTitle" class="form-label">Sub Title</label>
                                    <textarea type="text" name="subTitle"
                                        class="form-control @error('subTitle') is-invalid @enderror editable"
                                        id="subTitle">{{ $project->subTitle }}</textarea>
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
                                        id="ck1">{{ $project->description }}</textarea>
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
                                            <textarea type="text" name="detail1"
                                                class="form-control @error('detail1') is-invalid @enderror editable"
                                                id="detail1">{{ $project->detail1 }}</textarea>
                                            @error('detail1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <label for="insta1" class="form-label">Insta 1</label>
                                        <input type="text" name="insta1"
                                            class="form-control @error('insta1') is-invalid @enderror" id="insta1"
                                            value="{{ $project->insta1 }}">
                                        @error('insta1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <div class="mb-3">
                                            <label for="detail2" class="form-label">Detail 2</label>
                                            <textarea type="text" name="detail2"
                                                class="form-control @error('detail2') is-invalid @enderror editable"
                                                id="detail2">{{ $project->detail2 }}</textarea>
                                            @error('detail2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <label for="insta2" class="form-label">Insta 2</label>
                                        <input type="text" name="insta2"
                                            class="form-control @error('insta2') is-invalid @enderror" id="insta2"
                                            value="{{ $project->insta2 }}">
                                        @error('insta2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <div class="mb-3">
                                            <label for="detail3" class="form-label">Detail 3</label>
                                            <textarea type="text" name="detail3"
                                                class="form-control @error('detail3') is-invalid @enderror editable"
                                                id="detail3">{{ $project->detail3 }}</textarea>
                                            @error('detail3')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <label for="insta3" class="form-label">Insta 3</label>
                                        <input type="text" name="insta3"
                                            class="form-control @error('insta3') is-invalid @enderror" id="insta3"
                                            value="{{ $project->insta3 }}">
                                        @error('insta3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="text" name="body"
                                        class="form-control  @error('body') is-invalid @enderror editable" id="ck2"
                                        rows="5">{{ $project->body }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>



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

                                @foreach ($otherImage as $item)
                                    <a id="image{{ $item->id }}" href="#" onclick="what({{ $item->id }})">
                                        <img src="{{ asset('storage/' . $item->otherImage) }}" alt=""
                                            style="max-height: 100px; max-width: 100px;">
                                    </a>
                                @endforeach
                                <br>
                                <button type="submit" class="btn btn-primary mt-3">Update</button>
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
        </script>
    @endsection

    @section('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
        <script>
            function hilzam() {
                if ($('#featured').prop('checked') == true) {
                    $('.layout').show();
                } else {
                    $('.layout').hide();
                }
            };

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
                            url: "{{ url('') }}/admin/project/image/" + id,
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
