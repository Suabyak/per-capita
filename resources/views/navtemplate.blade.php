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
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('css/register.css') }}">
    <link rel="stylesheet" href="{{ url('css/userpage.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;600&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ url('img/pizza-logo.png') }}" alt="Logo Per Capita">
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
                    <a class="nav-link" href="#">zaloguj się</a>
                </li>
            </ul>
            <ul class="elements">
                <li class="navitem">
                    <a class="navlink" aria-current="page" href="/order">
                        <span class="text">menu</span>
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                    </a>
                </li>
                <li class="navitem">
                    <a class="navlink" href="#">
                        <span class="text">kontakt</span>
                        <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                    </a>
                </li>
                <li class="navitem-2">
                    <a class="navlink" href="#">
                        <span class="icon-2"><ion-icon name="log-in-outline"></ion-icon></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@yield('content')


<script src="js/fade.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hide.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
