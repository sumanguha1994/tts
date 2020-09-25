<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="{{ asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('public/assets/media/logos/favicon.ico') }}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.10.3/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="{{ url('/dashboard') }}">
                <img alt="Logo" src="{{ asset('public/assets/media/logos/logo-6.png') }}" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    @yield('content')
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#22b9ff",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
        $('#bookingadminli').on('click', function(){
            if($(this).hasClass('kt-menu__item--open-dropdown kt-menu__item--hover')){
                $(this).removeClass('kt-menu__item--open-dropdown kt-menu__item--hover');
            }else{
                $(this).addClass('kt-menu__item  kt-menu__item--submenu kt-menu__item--here kt-menu__item--open-dropdown kt-menu__item--hover');
            }
        })
    </script>
    <script src="{{ asset('public/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
    <!-- datatable -->
    <script src="{{ asset('public/assets/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
</body>
</html>
