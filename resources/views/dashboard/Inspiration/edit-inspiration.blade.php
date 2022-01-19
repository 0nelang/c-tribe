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
                            <form action="{{ route('inspiration.update',['inspiration' => $inspiration->id]) }}" method="POST" enctype="multipart/form-data">
                                @method("put")
                                @csrf
                                <div class="row">
                                    <div class="col-6"><div class="mb-3">
                                  <label for="name" class="form-label is-invalid">Name</label>
                                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="our-people-name" value="{{ $inspiration->name }}">
                                  @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div></div>
                                    <div class="col-6"> <div class="mb-3">
                                  <label for="date" class="form-label is-invalid">Date</label>
                                  <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="our-people-date" value="{{ $inspiration->date }}">
                                  @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div></div>
                                </div>                                  
                                
                               
                                <div class="mb-3">
                                  <label for="quote" class="form-label">Quote</label>
                                  <input type="text" name="quote" class="form-control @error('quote') is-invalid @enderror" id="quote" value="{{ $inspiration->quote }}">
                                  @error('quote')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image Cover</label>
                                    <br>
                                    <img id="img-output" class="mb-3" src="{{ asset('storage/' . $inspiration->image ) }}" style="max-height: 200px; max-width:400px;">
                                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="imageFile" accept="image/*">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Desc</label>
                                    <textarea type="text" name="description" class="form-control text-white @error('description') is-invalid @enderror editable" id="editor" rows="5">{{ $inspiration->description }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="form-label">video</label>
                                    <br>
                                    <video id="vid-output" src="{{ asset('storage/' . $inspiration->video ) }}" controls style="max-height: 300px; max-width:600px;"></video>
                                    <input class="form-control @error('video') is-invalid @enderror" name="video" type="file" id="videoFile" accept="video/*">
                                    @error('video')
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

    <script>
        $(function(){
        $("#imageFile").change(function(event) {
            var x = URL.createObjectURL (event.target.files[0]);
            $("#img-output").attr("src",x);
            console.log(event);
        });
        });

        $(function(){
        $("#videoFile").change(function(event) {
            var x = URL.createObjectURL (event.target.files[0]);
            $("#vid-output").show();
            $("#vid-output").attr("src",x);
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
