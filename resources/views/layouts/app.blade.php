<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('partials.stylesheets')
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>

    <div id="wrapper">
        @include('partials.navbar')
        @include('partials.sidebar')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @include('partials.messages')
                @yield('content')
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Hapyy31 Group </footer>
        </div>
    </div>
    @include('partials.scripts')
    @yield('jsScript')
</body>
</html>
