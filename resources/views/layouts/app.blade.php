<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '8Baggers') }}</title>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('slick-1.8.1/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-50 shadow-lg sticky top-0 z-10">
            <div class="container mx-auto flex justify-between items-center px-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    <img src="{{URL::asset('/images/8baggers.png')}}" class="w-36 md:w-48 lg:w-60">
                </a>
                
                <nav class="space-x-4 absolute right-10 text-gray-400 text-sm sm:text-s">
                    <div class="flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                <a href="/" class="text-lg text-center p-4 no-underline hover:underline" aria-current="page">Home</a>
                                <a href="/blog" class="text-lg text-center p-4 no-underline hover:underline">Blog</a>
                                <a href="/class" class="text-lg text-center p-4 no-underline hover:underline">Our Class</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Mobile Menu -->
                <div class="mr-8">
                    <div class="dropdown sm:hidden inline-block relative">
                        <button class="bg-gray-300 text-gray-700 font-semibold sm:py-2 py-1 sm:px-4 px-3 rounded inline-flex items-center">
                            <i class="fas fa-bars" style="font-size: 25px; color: #169bd7"></i>
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                            <li class=""><a href="/" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" aria-current="page">Home</a></li>
                            <li class=""><a href="/blog" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Blog</a></li>
                            <li class=""><a href="/class" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Our Class</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
    <!-- class script -->
    @stack('scripts')

    <!-- index carousel script -->
    @stack('carousel-scripts')
</body>
</html>
