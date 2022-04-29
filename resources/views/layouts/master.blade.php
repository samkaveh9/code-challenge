<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    @stack('styles')
</head>
<body>

    @yield('master')

<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
@stack('scripts')
</body>

</html>
