<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">



  <head>
    @include('admin.layouts.head')

  </head>
  <body>


    @include('admin.layouts.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">


        @include('admin.layouts.header')

        @yield('body')


      @include('admin.layouts.footer')

    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('')}}coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="{{ asset('')}}coreui/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('')}}coreui/vendors/chart.js/js/chart.min.js"></script>
    <script src="{{ asset('')}}coreui/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="{{ asset('')}}coreui/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="{{ asset('')}}coreui/js/main.js"></script>
    <script>
    </script>

  </body>
</html>
