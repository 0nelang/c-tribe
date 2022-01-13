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
    <title>C-tribe {{ $page }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="/plugins/apexcharts/apexcharts.css" rel="stylesheet">
    <link href="/plugins/DataTables/datatables.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="/css/main.min.css" rel="stylesheet">
    <link href="/css/dark-theme.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/plugins/jquery/jquery-3.4.1.min.js"></script>
</head>
<body>

    <div class="page-container">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
        </div>
            @include('partials.dashboard.page-header')

            @include('partials.dashboard.page-sidebar')

            @yield('main')


    </div>




    <!-- Javascripts -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/js/main.min.js"></script>
    <script src="/js/pages/dashboard.js"></script>
    <script src="/js/pages/datatables.js"></script>
    <script src="/plugins/DataTables/datatables.min.js"></script>
</body>
</html>
