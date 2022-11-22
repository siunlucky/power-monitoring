<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Power Monitoring</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


</head>

<body>
    <div class="min-h-screen flex flex-row bg-gray-200">
        @include('.components.sidebar')
        <div class="w-full">
            @include('.components.header')
            @yield('content')
        </div>

    </div>




    @yield('scripts')
    @vite('resources/js/app.js')

</body>

</html>