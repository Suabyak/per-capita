<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Per Capita @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&family=Lato:wght@100&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ url('img/pizza-favicon.png') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css?version=1') }}">
    <link rel="stylesheet" href="{{ url('css/register.css') }}">
    <link rel="stylesheet" href="{{ url('css/register_first_time.css') }}">



    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;600&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/pizza-logo.png" alt="Logo Per Capita">
<!--                https://www.flaticon.com/free-icons/pizza-->
                <div class="navbar-brand-overlay"></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/order">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="show_hide()" class="nav-link" href="{{ route('login') }}">{{ __('zaloguj się') }}</a>
                    </li>
                </ul>
                <ul class="elements">
                    <li class="navitem">
                        <a class="navlink " aria-current="page" href="/order">
                            <span class="text">menu</span>
                            <span class="icon"><ion-icon name="book-outline"></ion-icon></span></a>
                    </li>
                    <li class="navitem">
                        <a class="navlink" href="#">
                            <span class="text">kontakt</span>
                            <span class="icon"><ion-icon name="call-outline"></ion-icon></span></a>
                    </li>
                    <li class="navitem-2">
                        <a href="{{ route('login') }}">
                            <button onclick="show_hide()" class="icon-2"><ion-icon name="log-in-outline"></ion-icon></button>
                        </a>
                    </li>

                    </ul>
                    <div id="register">
                        <span onclick="show_hide()" class="exit"><ion-icon name="close"></ion-icon></span>

                        <form class="form" method="POST" action="{{ route('user_store') }}">
                            <div class="header">Zaloguj się</div>
                                <input id="email" placeholder="E-mail" spellcheck="false" type="email" name="password">
                                <input id="password-input"  placeholder="Hasło" type="password" name="password">
                                <input class="login-submit" type="submit" value="Zaloguj się">
                                <div class="other">
                                    <a onclick="show_hide_exit()" class="reg" href="">Zarejestruj się</a>
                                </div>
                        </form>

                    </div>
                    <div id="first_reg">
                        <span onclick="show_hide_first()" class="exit"><ion-icon name="close"></ion-icon></span>

                        <form class="form" action="{{ route('user_store') }}" method="POST" role="form">

                            <div class="header">Zarejestruj się</div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <input id="email" placeholder="E-mail" spellcheck="false" type="email" name="email">
                                    <input class="password-input" placeholder="Hasło" spellcheck="false" type="password" name="password">

                                    <input  class="register-submit" type="submit" value="Zarejestruj się">
                                    <div class="other">
                                        <a onclick="show_hide_exit()" class="reg" href="">Wróć do logowania</a>
                                </div>
                        </form>

                    </div>




            </div>
        </div>
    </nav>

@yield('content')

<section class="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mt-5">
                <h1 class="mb-3">Kontakt</h1>
                <a href="/">Per Capita</a>
                <br>
                ul. Sejmowa 5A
                <br>
                59-220 Legnica
                <br>
                <br>
                <a href="tel:722137420">tel.: 722 137 420</a>
                <br>
                <a href="mailto: percapita@gmail.com">percapita@gmail.com</a>
                <br>
                <br>
                Rezerwacje przyjmujemy wyłącznie przez <strong>kontakt telefoniczny</strong>.
            </div>

            <div class="col-lg-6 mt-5">
                <h1>Wyślij wiadomość</h1>
                <form>
                    <div class="form-group mt-4">
                        <input placeholder="Twój adres e-mail" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3 mb-3 ">
                        <textarea placeholder="Wiadomość" type="text" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="location">
    <div class="container">
        <div class="row">
            <h1>Znajdziesz nas tutaj:</h1>
            <div class="col-lg-12 location-map mt-3">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.7933988731024!2d16.147909515758872!3d51.
                    20445847958652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f128c143643e9%3A0xd13d291bc4044b4c!2sColle
                    gium%20Witelona%20Uczelnia%20Pa%C5%84stwowa!5e0!3m2!1spl!2spl!4v1649251131301!5m2!1spl!2spl" width="100%" height="100%"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container text-center">
        <span>Wszelkie prawa zastrzeżone.</span>
    </div>
</footer>
<script src="js/show_hide.js"></script>
<script src="js/fade.js"></script>
<script src="js/bootstrap.min.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
