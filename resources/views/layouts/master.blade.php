<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    @vite('resources/js/app.js')
    @section('navbar')
    <div class="navbar">
        <div class="logo">
            <a href="/">
                <h1>Z-con</h1>
            </a>
        </div>
        <div class="navbar-content">
            <livewire:searchblock></livewire:searchblock>
            <livewire:categoryblock></livewire:categoryblock>
            <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping fa-xl icon"> {{ count((array) session('cart')) }}</i></a>

            @auth
                <a href="/profile/1">
            @else
                <a href="/login">
            @endauth
                <i class="fa-solid fa-user fa-xl icon"></i></a>
        </div>
    </div>


    @show
    @yield('content')

    </div>
    <div class="footer">
        It's just a prototype web, might be a bit buggy, also contain a lot of fake data. <br>
        My contact links are here: <br>
        <i class="fa-solid fa-envelope fa-xl" style="padding-top: 2vh"></i> kamilczekotas@gmail.com<br>
        <a href="https://github.com/Kamilplhh" target="_blank"><i class="fa-brands fa-github fa-xl" style="padding-top: 2vh"></i> Github</a>
    </div>
    <livewire:scripts>
</body>

</html>