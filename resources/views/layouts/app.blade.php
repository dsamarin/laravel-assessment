<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EightCig Assessment Site</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="bg-gray-200">
    <nav class="flex justify-between bg-white text-black w-screen mb-6">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a class="text-3xl font-bold font-heading" href="#">
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                EightVape
            </a>
            <!-- Nav Links -->
            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a class="hover:text-gray-500" href="{{ route('home') }}">Home</a></li>
                <li><a class="hover:text-gray-500" href="{{ route('category', ['category' => 'juice']) }}">Juice</a>
                </li>
                <li><a class="hover:text-gray-500" href="{{ route('category', ['category' => 'vape']) }}">Vapes</a>
                </li>
                <li><a class="hover:text-gray-500"
                        href="{{ route('category', ['category' => 'disposable']) }}">Disposables</a></li>
                <li><a class="hover:text-gray-500" href="{{ route('category', ['category' => 'mod']) }}">Mods</a></li>
                <li><a class="hover:text-gray-500" href="{{ route('category', ['category' => 'tank']) }}">Tanks</a>
                </li>
                <li><a class="hover:text-gray-500" href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
            <!-- Header Icons -->
            <div class="hidden xl:flex items-center space-x-5 items-center">
                <a class="hover:text-gray-200" href="{{ route('cart') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
                <a class="flex items-center hover:text-gray-200" href="{{ route('cart') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span
                            class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                        </span>
                    </span>
                    <span class="ml-2">My Cart</span>
                </a>
                <!-- Sign In / Register      -->
                <a class="flex items-center hover:text-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>

    @if (Session::has('message'))
        <x-message :message="Session::get('message')" />
    @endif

    @yield('content')

    <footer class="bg-white mt-12">
        <div class="container mx-auto py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">EightVape</a>
            <p class="py-2 text-gray-500 sm:py-0">&copy; 2022 All rights reserved</p>
        </div>
    </footer>
</body>

</html>
