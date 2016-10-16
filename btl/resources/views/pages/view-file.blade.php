
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
    <iframe src="{{ url($file -> url) }}" width="100%" height="800"> </iframe>
</body>
</html>