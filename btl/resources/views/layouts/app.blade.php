<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
</head>

<!-- body -->
<body>
    <!-- header -->
    @include('include.header')

    <!-- content -->
    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="{{ url('plugins/bootstrap/dist/js/bootstrap.min.js') }}"> </script>
    <script src="{{ url('js/jquery-3.1.1.min.js') }}"> </script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</body>
</html>
