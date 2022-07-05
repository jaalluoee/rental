<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $settings->name }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <nav class="navbar h-20 bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl space-x-3">
                <img class="w-14" src="{{ $settings->image }}" alt="">
                <p>{{ $settings->name }}</p>
            </a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal p-0">
                <li>
                    <a href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}">
                        Hubungi Kami
                    </a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="{{ route('product.index') }}">
                        Produk
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    <footer class="footer p-10 bg-base-200 text-base-content">
        <div>
            <span class="footer-title">Link</span>
            <a class="link link-hover">Beranda</a>
            <a class="link link-hover">Hubungi Kami</a>
            <a class="link link-hover">Produk</a>
            <a class="link link-hover">Tentang Kami</a>
        </div>
        <div>
            <span class="footer-title">Sosial Media</span>
            <a class="link link-hover">Whatsapp</a>
            <a href="" class="link link-hover">Google Map</a>
            
        </div>
        <div class="max-w-lg">
            <div class="items-center grid-flow-col">
                <img class="w-10" src="{{ $settings->image }}" alt="">
                <p class="text-2xl font-semibold">{{ $settings->name }} <br></p>
            </div>
            <p class="text-justify">
                {{
                    $settings->description
                }}
            </p>
        </div>
    </footer>
    <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300">
        <div class="items-center grid-flow-col">
            <img class="w-10" src="{{ $settings->image }}" alt="">
            <p>{{ $settings->name }} <br></p>
        </div>
        <div class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </div>
    </footer>
</body>

</html>