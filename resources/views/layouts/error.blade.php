<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('/admin/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/plugins/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/plugins/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/plugins/blue-dark.css') }}" id="theme" rel="stylesheet">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>

    <section id="wrapper" class="error-page">           
        @yield('content')
    </section>
    @include('partials.scripts')
    @yield('jsScript')
</body>
</html>
