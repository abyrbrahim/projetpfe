<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from exon.arsaland.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 12:55:39 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>E-liquide Store</title>
    <meta name="description" content="Exon Admin Dashboard Template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome/5.13.1/css/all.min.css') }}" />
    <!-- Dosis & Poppins Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;523;600;700;800&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Page's links to CSS dependencies goes here. -->

    <link rel="stylesheet" href="{{ asset('vendor/ari_d/js-list-manager/js-list-manager.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/layout-1/css/app8bb9.css?v=545') }}">
    <link rel="stylesheet" href="{{ asset('../../../css/invoices/invoices.css') }}">
    <!-- Page style codes or css links goes here. -->
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../vendor/select2/select2.min.css') }} ">


    @livewireStyles
    <!-- Setting website's root url for the api calls. -->
    <script type="text/javascript">
        window.ROOT_URL = ""

    </script>


</head>

<body>

    <!-- Anything prepended to the body will be placed here. -->

    <!-- Wrapper Arround The Page -->
    <div class="page-wrapper sidebar-open navbar-fixed ">

        <!-- Sidebar -->

        @include('layouts.templates.sidebar')
        <!-- / Sidebar -->

        <main class="main-content">

            <div class="sidebar-backdrop"></div>

            <!-- Header Nav -->
            @include('layouts.templates.header')
            <!-- / Header Nav -->

            <div class="page-container">
                @yield('content')
                <!-- Main Page Content -->
                <div class="page-content">

                </div><!-- / .page-content -->
                <!-- Main Page Content -->

                <!-- Footer -->
                @include('layouts.templates.footer')
                <!-- / .copyright -->
                <!-- / Footer -->

            </div><!-- / .page-container -->


        </main><!-- / .main-content -->

    </div><!-- / .page-wrapper -->
    <!-- / Wrapper Arround The Page -->


    <script src="{{ asset('/js/vendor.js') }}"></script>

    <!-- Page's links to JS dependencies goes here. -->

    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('../../js/pages/components/sweet-alert.js') }}"></script>
    <script src="{{ asset('/layouts/layout-1/js/app.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-table/bootstrap-table.js') }}"></script>
    <!-- Page script codes or links goes here. -->
    <script src="{{ asset('../../vendor/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('../../js/pages/components/toastr.js') }}"></script>
    <script src="{{ asset('../../vendor/select2/select2.full.min.js') }} "></script>
    @if (Session::has('success_message'))

    <script>
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 300;
        toastr.options.closeEasing = 'swing';
        toastr.success( '{!! Session::get('success_message') !!}','Bon travail!')
    </script>

    @endif
    @error('myError')
    <script>
        toastr.options.closeButton = true;
    toastr.options.closeMethod = 'fadeOut';
    toastr.options.closeDuration = 300;
    toastr.options.closeEasing = 'swing';
    toastr.error( '{{ $message }}')
    </script>
    @enderror
    @livewireScripts
</body>

<!-- Mirrored from exon.arsaland.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 12:57:14 GMT -->

</html>
