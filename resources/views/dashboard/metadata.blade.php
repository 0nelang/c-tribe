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
    {{-- <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div> --}}
    <div class="page-container">
        <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                        <li class="nav-item">
                            <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="headerNav">
                    <div class="ms-5">
                        <a class="dark" href="#" onclick="out()">
                            {{ __('Logout') }} <i data-feather="log-out"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
        </div>


        <div class="page-sidebar">
            <ul class="list-unstyled accordion-menu">
              <li class="sidebar-title">
                Main
              </li>
              <li class="{{ ($page === 'Admin')? 'active-page' : ''  }}">
                <a href="/admin"><i data-feather="home"></i>Dashboard</a>
              </li>

              <li class="sidebar-title">
                Apps
              </li>
              <li class="{{ ($page === 'Setting')? 'active-page' : ''  }} {{ ($page === 'General')? 'active-page' : ''  }} {{ ($page === 'Menu')? 'active-page' : ''  }} {{ ($page === 'Page')? 'active-page' : ''  }}">
                <a href="#"><i data-feather="tool"></i>Settings<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a href="/admin/general" class="{{ ($page === 'General')? 'active' : ''  }}"><i class="far fa-circle"></i>General</a></li>
                    <li><a href="/admin/page" class="{{ ($page === 'Page')? 'active' : ''  }}"><i class="far fa-circle"></i>Page</a></li>
                    <li><a href="/admin/menu" class="{{ ($page === 'Menu')? 'active' : ''  }}"><i class="far fa-circle"></i>Menu</a></li>
                    <li><a href="/admin/setting" class="{{ ($page === 'Setting')? 'active' : ''  }}"><i class="far fa-circle"></i>Admin</a></li>
                </ul>
              </li>
              <li class="{{ ($page === 'People')? 'active-page' : ''  }}">
                <a href="/admin/people"><i data-feather="user"></i>Our People</a>
              </li>
              <li class="{{ ($page === 'Partners')? 'active-page' : ''  }}">
                <a href="/admin/partners"><i data-feather="user-check"></i>Partners</a>
              </li>
              <li class="{{ ($page === 'Service')? 'active-page' : ''  }}">
                <a href="/admin/service"><i data-feather="truck"></i>Service</a>
              </li>
              <li class="{{ ($page === 'Project')? 'active-page' : ''  }}">
                <a href="/admin/project"><i data-feather="package"></i>Project</a>
              </li>
              <li class="{{ ($page === 'Inspiration')? 'active-page' : ''  }}">
                <a href="/admin/inspiration"><i data-feather="sun"></i>Insipiration</a>
              </li>
              <li class="{{ ($page === 'Flagship')? 'active-page' : ''  }}">
                <a href="/admin/flagship"><i data-feather="flag"></i>Flagship</a>
              </li>
            </ul>
    </div>



        <div class="page-content">
            <div class="main-wrapper">

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table id="logo-table" class="display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>index</th>
                                            <th>Name</th>
                                            <th>Volume</th>
                                            <th>Material</th>
                                        </tr>
                                    </thead>
                                    <tbody id="images">
                                        @foreach ($metadata as $index => $pep)

                                            <tr>
                                                <td>{{ $index }}</td>
                                                <td>{{ $pep->entity_name }}</td>
                                                <td>{{ $pep->entity_volume }}</td>
                                                <td>{{ $pep->material }}</td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>index</th>
                                            <th>Name</th>
                                            <th>Volume</th>
                                            <th>Material</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/reorder.js') }}"></script>
    <script>
        var table = $('#logo-table').DataTable({
        });
    </script>
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
        function out() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#logout-form').submit();
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
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

{{-- <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">Entity Name</th>
            <th scope="col">Entity Volume</th>
            <th scope="col">Material</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($metadata as $index => $data)
            <tr>
              <th scope="row">{{ $index }}</th>
              <td>{{ $data->entity_name }}</td>
              <td>{{ $data->entity_volume }}</td>
              <td>{{ $data->material }}</td>
            </tr>

            @endforeach
        </tbody>
      </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html> --}}
