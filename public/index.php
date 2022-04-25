<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Per Capita</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&family=Lato:wght@100&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="img/pizza-favicon.png">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="resources/css/styles.css"/>
    <link rel="stylesheet" href="resources/css/register.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="resources/img/pizza-logo.png" alt="Logo Per Capita">
<!--                https://www.flaticon.com/free-icons/pizza-->
                <div class="navbar-brand-overlay"></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="order.php">menu</a>
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
                        <a class="navlink " aria-current="page" href="order.php">
                            <span class="text">menu</span>
                            <span class="icon"><ion-icon name="book-outline"></ion-icon></span></a>
                    </li>
                    <li class="navitem">
                        <a class="navlink" href="#">
                            <span class="text">kontakt</span>
                            <span class="icon"><ion-icon name="call-outline"></ion-icon></span></a>
                    </li>
                    <li class="navitem-2">
                        <a class="navlink" href="#">
                            <span class="icon-2"><ion-icon name="log-in-outline"></ion-icon></span>
                    </li>
        
                </ul>
                <div class="register">
                    <span class="exit"><ion-icon name="close"></ion-icon></span>
                    <div class="header">Zaloguj sie</div>
                    <form action="index.html" method="post">
                        <input placeholder="Login" spellcheck="false">
                        <div class="pass">
                            <input id="password" type="password" placeholder="Hasło" spellcheck="false">
                        </div>
                        <input type="submit" value="Zaloguj się">
                    </form>
                    <div class="other">
                        <a class="reg" href="#">Zarejestruj się</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="page-header">
        <div class="bg-img-lp">
            <div class="bg-img-shadow">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-5 mb-3 text-center">
                            <h1 class="fancy">Per Capita</h1>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h4>Pizza tworzona z <strong>neapolitańską</strong> tradycją.</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt-3 text-center">
                            <a class="icons-style" href="https://www.facebook.com" target="_blank">
                                <ion-icon name="logo-facebook" size="large"></ion-icon>
                            </a>

                            <a class="icons-style" href="https://www.instagram.com" target="_blank">
                                <ion-icon name="logo-instagram" size="large"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </header>


    <section class="about-us mt-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 mb-3">
                    <h1>O nas</h1>
                    <p>Per Capita narodziła się z otwartości, na wszystkich, którzy podzielają naszą pasję do Włoch.
                        <br>Włoska gościnność, która zawsze była bliska także nam, przerodziła się w marzenie, by Per Capita
                        stała się miejscem spotkań, wspólnego biesiadowania i rozmów na temat najsłynniejszego i najbardziej lubianego dania na świecie.
                        <br><br>Mąkę, drożdże, sól i wodę zamknięte w neapolitańskiej sztuce wypieku, codziennie zamieniamy w radość serwowania pizzy, która uwodzi smakiem i swoją prostotą.
                    </p>
                </div>

                <div class="col-lg-7 mb-3">
                    <img src="resources/img/about-us.jpg" alt="Pizza chef" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section class="top-offers mt-5">
        <div class="container">
            <div class="row">
                <h1>Najczęściej wybierane</h1>

                <div class="col-lg-3 offer">
                    <img class="offer-image" src="resources/img/margherita.jpg" alt="Pizza Margherita">
                    <div class="image-overlay">
                        <div class="image-title">Margherita</div>
                    </div>
                </div>

                <div class="col-lg-3 offer">
                    <img class="offer-image" src="resources/img/margheritafancy.jpg" alt="Pizza Margherita con Bufala">
                    <div class="image-overlay">
                        <div class="image-title">Margherita con Bufala</div>
                    </div>
                </div>

                <div class="col-lg-3 offer">
                    <img class="offer-image" src="resources/img/sangiorgio.jpg" alt="Pizza San Giorgio">
                    <div class="image-overlay">
                        <div class="image-title">San Giorgio</div>
                    </div>
                </div>

                <div class="col-lg-3 offer">
                    <img class="offer-image" src="resources/img/pancetta.jpg" alt="Pizza Pancetta e Salame">
                    <div class="image-overlay">
                        <div class="image-title">Pancetta e Salame</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 mt-5">
                    <h1 class="mb-3">Kontakt</h1>
                    <a href="index.html">Per Capita</a>
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
                    <form id="todoForm">
                        <div class="form-group mt-4">
                            <input placeholder="Adres e-mail" type="text" class="form-control">

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

    <script src="resources/js/fade.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/hide.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>