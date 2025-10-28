<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="/docs/favicon.ico">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="p-5 bg-gray-900 antialiased ">
    <div class="md:container md:mx-auto">
        
        @yield('content')
    </div>
</body>

</html>
