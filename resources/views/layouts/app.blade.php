<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('custom-stylesheets')
    @yield('custom-script')
    <title>@yield('title', 'App')</title>
</head>

<body>
    
    @include('partials.header')

    <main>
        @yield('main-section')
    </main>

    @include('partials.footer')



    @vite('resources/js/app.js')
</body>
</html>