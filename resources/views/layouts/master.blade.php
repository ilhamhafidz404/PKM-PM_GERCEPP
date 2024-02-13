<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
            name="viewport"
        />
        <title>GERCEPP</title>

        <!-- General CSS Files -->
        <link
            rel="stylesheet"
            href="{{ asset('template/dist/assets/modules/bootstrap/css/bootstrap.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('template/dist/assets/modules/fontawesome/css/all.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('template/dist/assets/modules/summernote/summernote-bs4.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('template/dist/assets/modules/dropzonejs/dropzone.css') }}" />

        <!-- CSS Libraries -->

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('template/dist/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('template/dist/assets/css/components.css') }}" />
        <!-- Start GA -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "UA-94034622-3");
        </script>
        <!-- /END GA -->
    </head>

    <body class="layout-3">
        <div id="app">
            <div class="main-wrapper container">
              <x-topbar/>
              <x-navbar />
              @yield("content")
              <x-footer />
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('template/dist/assets/modules/jquery.min.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/popper.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/tooltip.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/moment.min.js') }}"></script>
        <script src="{{ asset('template/dist/assets/js/stisla.js') }}"></script>

        <!-- JS Libraies -->
        <script src="{{ asset('template/dist/assets/modules/summernote/summernote-bs4.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/codemirror/mode/javascript/javascript.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/dropzonejs/min/dropzone.min.js') }}"></script>
        <script src="{{ asset('template/dist/assets/js/page/components-multiple-upload.js') }}"></script>
        <script src="{{ asset('template/dist/assets/modules/sweetalert/sweetalert.min.js') }}"></script>

        <!-- Template JS File -->
        <script src="{{ asset('template/dist/assets/js/scripts.js') }}"></script>
        <script src="{{ asset('template/dist/assets/js/custom.js') }}"></script>

        @yield('script')
    </body>
</html>
