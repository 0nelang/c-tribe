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
                            <form action="{{ route('menu.update', ['menu' => $menu->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method("put")
                                <fieldset disabled>
                                    <div class="row">
                                        <div class="mb-3 col">
                                          <label for="defaultName" class="form-label">Default Name</label>
                                          <input type="text" id="defaultName" class="form-control" placeholder="{{ $menu->default_name }}">
                                        </div>
                                        <div class="mb-4 col">
                                          <label for="defaultURL" class="form-label">Default URL</label>
                                          <input type="text" id="defaultURL" class="form-control" placeholder="{{ $menu->default_url }}">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-check form-switch mb-3" onclick="hilzam()">
                                    <label class="form-check-label" for="custom">use custom name & url</label>
                                    <input class="form-check-input" type="checkbox" id="custom" name="custom" @if ($menu->custom)
                                    checked
                                    @endif>
                                </div>
                                    <div class="mb-3 layout" style="display: {{ ($menu->custom == true)? 'block' : 'none'  }}">
                                        <label for="name" class="form-label is-invalid">Custom Name</label>
                                        <input type="text" name="custom_name" class="form-control"
                                            value="{{ $menu->custom_name }}" id="name" aria-describedby="our-people-name">
                                    </div>
                                    <div class="mb-3 layout" style="display: {{ ($menu->custom == true)? 'block' : 'none'  }}">
                                        <label for="title" class="form-label">Custom URL</label>
                                        <input type="text" name="custom_url"
                                            class="form-control @error('custom_url') is-invalid @enderror"
                                            value="{{ $menu->custom_url }}" id="title">
                                            @error('custom_url')
                                            <div class="invalid-feedback">
                                                Custom URL hass been selected.
                                            </div>
                                        @enderror
                                    </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection

    @section('js')
        <script>
            function hilzam() {
                if ($('#custom').prop('checked') == true) {
                    $('.layout').show();
                } else {
                    $('.layout').hide();
                }
            };
        </script>
    @endsection

    @section('ck-editor')
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

        <script>
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
