<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('admin/bootstrape5/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/datatables.min.css') }}">

    <script src="{{ asset('admin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/iconify/iconify.min.js') }}"></script>

    <script src="{{ asset('js/customjs.js') }}"></script>
    <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet">

    <title>Welcome</title>

    <style>
        .bg-sourov-custom-color {

            background-color: #041836;
            color: #fff;

        }

    </style>


</head>



</head>

<body>

    <body id="page-top">




        <!-- Page Wrapper -->
        <div id="wrapper">


            @include('admin.includes.sidebar')




            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">


                    @include('admin.includes.navbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid pl-1 pl-md-2 ">

                        @yield('content')

                    </div>


                    <!-- Footer will be here -->


                </div>

            </div>
            <!-- End of Page Wrapper -->
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


    </body>

</html>
