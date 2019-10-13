<!DOCTYPE html>
<html lang="en">

@include('partials._head')
<body style="background-image: url({{ asset ('public/assets/media/demos/demo4/header.jpg') }}); background-position: center top; background-size: 100% 350px;" class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
        @include('partials._top-nav')

        <!-- page content -->
          <!-- top tiles -->
          <!-- /top tiles -->
          @yield('content')

        <!-- /page content -->

        <!-- footer content -->
        @include('partials._footer')
        <!-- /footer content -->

@include('partials._script')

  </body>
</html>
