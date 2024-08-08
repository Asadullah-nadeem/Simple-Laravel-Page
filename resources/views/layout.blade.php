<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Simple web')</title>
    <meta name="description" content="@yield('description', 'Free bootstrap template Atlas')">
    <link rel="icon" href="{{ asset('path/to/icon.png') }}" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/aos.css') }}">
</head>

<body>
@yield('header')

@yield('content')

@yield('footer')

<script src="{{ asset('bootstrap/js/aos.js') }}"></script>
<script>
    AOS.init({});
</script>
</body>
</html>
