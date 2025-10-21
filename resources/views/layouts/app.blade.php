<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <x-navbar :username="request('username')" />
    @include('layouts.partials.page-title')
    <main class="main-content">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>
