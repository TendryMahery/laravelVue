
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="{{asset('tailwind/tailwind.min.css')}}" rel="stylesheet" />
        <!-- Styles --> 
    </head>
    <body class="antialiased items-center">
        <nav class="p-6 flex justify-center bg-gray-400">
            <h1 class="text-4xl font-bold">crud</h1>
        </nav>
 
        @yield('content')
        
        <script src="{{asset('fontawesome/js/all.js')}}"></script>
    </body>
</html>