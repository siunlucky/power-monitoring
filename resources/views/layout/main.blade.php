<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Power Monitoring</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('boxicons/css/boxicons.min.css') }}">

</head>

<body>
    <div class="min-h-screen flex flex-row bg-gray-200">

        @include('.components.sidebar')
        <div class="w-5/6 relative left-64">
            @include('.components.header')
            <div class="p-10 mt-10">
                @yield('content')
            </div>

        </div>

    </div>




    @yield('scripts')
    @vite('resources/js/app.js')

</body>

</html>