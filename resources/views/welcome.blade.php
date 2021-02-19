<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div id="app">

        @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

        <div class="row container-fluid">

            <div class="col-md-3">
                <ul class="nav nav-pills nav-fill ">
                    <li class="nav-item">
                        <a class="nav-link accuei" href=""><img style="width: 100px;" src="../img/logo-senincub.png"
                                class="moonhover" alt="le logo"></a>
                   </li>
                </ul>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-pills nav-fill ">
                    <li class="nav-item">
                        <a class="nav-link " href="">
                            <p class=""></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accuei" href="">
                            <p class=""> </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">
                            <p class="bg-primary" style="color:white; font-size: x-large;" class="rounded"> VOUS
                                ETES DERMATO?</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/user" class="nav-link">
                            <p class="bg-primary" style=" color:white; font-size: x-large;" class="rounded">VOUS
                                VOULEZ VOUS SOIGNER?</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="{{ route('login') }}" class="nav-link">

                            <p class="bg-primary" style="color:white; font-size: x-large;" class="rounded">Se Connecter</p>
                        </router-link>
                    </li>
                </ul>
            </div>


            <div class="col-md-3">
                <ul class="nav nav-pills nav-fill ">
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-pills nav-fill ">
                    <li class="nav-item">
                        <a class="nav-link accuei" href="">
                            <p style=" font-size: 20px; " class="moonhover">Accueil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accuei" href="#about">
                            <p style=" font-size: 20px; " class="moonhover"> A propos de nous</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accuei " href="#services">
                            <p style=" font-size: 20px; " class="moonhover"> Nos services</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accuei " href="#actualites">
                            <p style=" font-size: 20px; " class="moonhover"> Conseils</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accuei " href="#contact">
                            <p style=" font-size: 20px; " class="moonhover">Contact</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
       

        
          <div class="container">
            <router-view></router-view>
        </div>
    </div>
    </div>
   
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
