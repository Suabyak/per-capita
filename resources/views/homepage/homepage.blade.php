@extends('navtemplate')



@section('content')



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
                <img src="{{ url('img/about-us.jpg') }}" alt="Pizza chef" width="100%">
            </div>
        </div>
    </div>
</section>

<section class="top-offers mt-5">
    <div class="container">
        <div class="row">
            <h1>Najczęściej wybierane</h1>

            <div class="col-lg-3 offer">
                <img class="offer-image" src="{{ url('img/margherita.jpg') }}" alt="Pizza Margherita">
                <div class="image-overlay">
                    <div class="image-title">Margherita</div>
                </div>
            </div>

            <div class="col-lg-3 offer">
                <img class="offer-image" src="{{ url('img/margheritafancy.jpg') }}" alt="Pizza Margherita con Bufala">
                <div class="image-overlay">
                    <div class="image-title">Margherita con Bufala</div>
                </div>
            </div>

            <div class="col-lg-3 offer">
                <img class="offer-image" src="{{ url('img/sangiorgio.jpg') }}" alt="Pizza San Giorgio">
                <div class="image-overlay">
                    <div class="image-title">San Giorgio</div>
                </div>
            </div>

            <div class="col-lg-3 offer">
                <img class="offer-image" src="{{ url('img/pancetta.jpg') }}" alt="Pizza Pancetta e Salame">
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

@endsection
