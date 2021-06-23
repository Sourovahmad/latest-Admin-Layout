<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('bootstrape5/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('iconify/iconify.min.js') }}"></script>

    <script src="{{ asset('js/customjs.js') }}"></script>
    <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">

    <title> home page </title>
</head>
<body>



    @yield('content')



</body>
</html>