@extends('layouts.dashboard-main')

@section('main')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('inspiration.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="name" class="form-label is-invalid">Name</label>
                                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="our-people-name" value="{{ $inspiration->name }}">
                                  @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
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
                                    <img id="output" class="mb-3" src="{{ asset('storage/' . $inspiration->image ) }}">
                                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="image" accept="image/*">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Desc</label>
                                    <textarea type="text" name="description" class="form-control text-white @error('description') is-invalid @enderror" id="description" rows="5">{{ $inspiration->description }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="form-label">video</label>
                                    <br>
                                    <video src="{{ asset('storage/' . $inspiration->video ) }}" controls></video>
                                    <input class="form-control @error('video') is-invalid @enderror" name="video" type="file" id="video" accept="video/*">
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
        $("#fileimage").change(function(event) {
            var x = URL.createObjectURL (event.target.files[0]);
            $("#output").attr("src",x);
            console.log(event);
        });
        })

    </script>
@endsection
