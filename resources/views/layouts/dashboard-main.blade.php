<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Creative Tribe | {{ $page }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/DataTables/datatables.min.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- Plugins stuff --}}
    <script src="/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.2/viewer.min.css"
        integrity="sha512-r+5gXtPk5M2lBWiI+/ITUncUNNO15gvjjVNVadv9qSd3/dsFZdpYuVu4O2yELRwSZcxlsPKOrMaC7Ug3+rbOXw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.2/viewer.js"
        integrity="sha512-taR40V17AK2+3RjqzCYkczb0/hTHuQCid0kBs0I2g6DqkFjkTcAIpsa+4PzGuWcRica2AOZQmz4pNPj4InFR8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @yield('css')
    <style>
        .scale-down {
            object-fit: scale-down;
        }

    </style>
</head>

<body>
    @include('sweetalert::alert')
    {{-- <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div> --}}
    <div class="page-container">
        @include('partials.dashboard.page-header')

        @include('partials.dashboard.page-sidebar')

        @yield('main')

    </div>


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
                    $('#form-delete' + id).submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }

    </script>

    <!-- Javascripts -->
    {{-- ck-editor --}}
    @yield('ck-editor')
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/js/main.min.js') }}"></script>
    <script src="{{ asset('/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('/js/pages/datatables.js') }}"></script>
    <script src="{{ asset('/plugins/DataTables/datatables.min.js') }}"></script>
    @yield('js')
    <script>
        function image() {
            const viewer = new Viewer(document.getElementById('images'), {
                viewed() {
                    viewer.zoomTo(1);
                },
            });
        }
    </script>
</body>

</html>
