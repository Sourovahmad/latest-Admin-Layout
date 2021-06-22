<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('admin/bootstrape5/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/fontawsome5/all.min.css') }}" rel="stylesheet" >

    <script src="{{ asset('admin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/iconify/iconify.min.js') }}"></script>

    <script src="{{ asset('js/customjs.js') }}"></script>
    <link  href="{{ asset('css/customStyle.css') }}" rel="stylesheet">

</head>

    <title>Welcome</title>
</head>
<body>


@yield('content')

</body>
</html>