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
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css?version=1') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ url('css/styles.css?version=1') }}">
    <link rel="stylesheet" href="{{ url('css/userpage.css?version=1') }}">
    <link rel="stylesheet" href="{{ url('css/register.css?version=1') }}">
    <link rel="stylesheet" href="{{ url('css/register_first_time.css?version=1') }}">
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
                        <a onclick="show_hide()" class="nav-link" href="#">zaloguj się</a>
                    </li>
                </ul>



                    <ul class="elements">
                        @auth
                        <li class="navitem dropdown">
                            <a id="navbarDropdown" class="navlink dropdown-toggle " href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::User()->email }}
                            </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                {{ __('Wyloguj się') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                        </li>
                        @endauth

                        <li class="navitem">
                        <a class="navlink" aria-current="page" href="/order">
                            <span class="text">menu</span>
                            <span class="icon"><ion-icon name="book-outline"></ion-icon></span></a>
                        </li>

                        <li class="navitem">
                        <a class="navlink" href="#">
                            <span class="text">kontakt</span>
                            <span class="icon"><ion-icon name="call-outline"></ion-icon></span></a>
                        </li>

                        <li class="navitem-2">
                            <button onclick="show_hide()" class="icon-2"><ion-icon name="log-in-outline"></ion-icon></button>
                        </li>
                    </ul>

                    <div id="register">
                        <span onclick="show_hide()" class="exit"><ion-icon name="close"></ion-icon></span>
                        <form class="form" method="post">
                            <div class="header">Zaloguj się</div>
                                <input id="email-input" placeholder="E-mail" spellcheck="false">
                                <input id="password-input" type="password" placeholder="Hasło" spellcheck="false">
                                <input class="login-submit" type="submit" value="Zaloguj się">
                                <div class="other">
                                    <a onclick="show_hide_exit()" class="reg" href="#">Zarejestruj się</a>
                                </div>
                        </form>
                    </div>
                    <div id="first_reg">
                        <span onclick="show_hide_first()" class="exit"><ion-icon name="close"></ion-icon></span>
                        <form class="form" method="post">
                            <div class="header">Zarejestruj się</div>
                                <input id="email-input" placeholder="E-mail" spellcheck="false">
                                    <input class="password-input" type="password" placeholder="Hasło" spellcheck="false">
                                    <input id="password-input" type="password" placeholder="Powtórz hasło" spellcheck="false">
                                    <input  class="register-submit" type="submit" value="Zarejestruj się">
                                    <div class="other">
                                        <a onclick="show_hide_exit()" class="reg" href="#">Wróć do logowania</a>
                                </div>
                            </form>
                    </div>


            </div>
        </div>
    </nav>

@yield('content')


<script src="js/show_hide.js"></script>
<script src="js/fade.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
