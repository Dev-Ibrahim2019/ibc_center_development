<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> IBC | @yield('title') </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('cms/assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('cms/assets/css/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ asset('cms/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset('cms/assets/css/style.css') }}" rel="stylesheet">

    <!--- Animations css-->
    <link href="{{ asset('cms/assets/css/animate.css') }}" rel="stylesheet">

    {{-- Toastr --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('styles')

</head>

<body class="main-body app sidebar-mini ltr">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('cms/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page custom-index">
        <div>
            <!-- main-header -->
            @include('admin.body.header')
            <!-- /main-header -->

            <!-- main-sidebar -->
            @include('admin.body.sidebar')
            <!-- main-sidebar -->
        </div>

        <!-- main-content -->
        @yield('content')
        <!-- /main-content -->

        <!-- Footer opened -->
        @include('admin.body.footer')
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('cms/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('cms/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Internal  Chart.bundle js -->
    <script src="{{ asset('cms/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('cms/assets/plugins/moment/moment.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('cms/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('cms/assets/plugins/raphael/raphael.min.js') }}"></script>

    <!--Internal Apexchart js-->
    <script src="{{ asset('cms/assets/js/apexcharts.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('cms/assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/ratings-2/star-rating.js') }}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{ asset('cms/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('cms/assets/js/eva-icons.min.js') }}"></script>

    <!-- right-sidebar js -->
    <script src="{{ asset('cms/assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('cms/assets/js/sticky.js') }}"></script>
    <script src="{{ asset('cms/assets/js/modal-popup.js') }}"></script>

    <!-- Left-menu js-->
    <script src="{{ asset('cms/assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- Internal Map -->
    <script src="{{ asset('cms/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('cms/assets/js/index.js') }}"></script>

    <!--themecolor js-->
    <script src="{{ asset('cms/assets/js/themecolor.js') }}"></script>

    <!-- Apexchart js-->
    <script src="{{ asset('cms/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('cms/assets/js/jquery.vmap.sampledata.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('cms/assets/js/custom.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets2/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>

    <script src="{{ asset('assets2/js/table-data.js') }}"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <script>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
        toastr.options = {
            "preventDuplicates": true
        }
    </script>
    @yield('scripts')
</body>

</html>
