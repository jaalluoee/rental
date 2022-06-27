<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal p-0">
                <li>
                    <a href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a>
                        Hubungi Kami
                    </a>
                </li>
                <li>
                    <a>
                        Tentang Kami
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
    <main>
        <div class="bg-opacity-20 hero min-h-screen bg-base-200 relative">
            <div style="background-image: url('https://api.lorem.space/image/car?w=600&h=400')" class="absolute inset-0 bg-no-repeat bg-cover opacity-20"></div>
            <div class="hero-content">
                <div class="w-1/2">
                    <h1 class="text-5xl font-bold">Rental Mobil Murah di Surabaya</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                <div class="w-1/2">

                </div>
            </div>
        </div>
    </main>
</body>

</html>