<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('template_title')</title>
            @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <main class="w-100 mt-5" style="height: 90vh">
        @yield('content')

    </main>

    

</body>
</html>