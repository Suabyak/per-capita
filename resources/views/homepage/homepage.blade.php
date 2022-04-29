@extends('template')



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

@endsection
