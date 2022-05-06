@extends('navtemplate')

@section('title')
    {{ $title }}
@endsection

@section('content')
<header class="page-header">
    <div class="bg-img-order">
        <div class="bg-img-shadow-order">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3 text-center">
                        <h1 class="fancy">Menu</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4>Podstawą naszej pizzy jest <strong>ciasto</strong>, które wyrasta przez 24 godziny.</h4>
                    </div>
                </div>

                <section class="order">
                  @foreach ($products as $product)
                  {{$product->name}}
                  @endforeach
                  <!--
                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1">Pizza</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">NAPOLI</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, filety anchois, oregano z Sycylii, pomidorki datterini
                            </p>
                            <p class="price">36 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">LA BUFALA</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella La Bufala DOP, bazylia
                            </p>
                            <p class="price">35 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">BIANCA</p>
                            <p class="menu-description">
                                mozzarella fior di latte, mascarpone, Gorgonzola DOP, cebula piklowana, orzechy włoskie
                            </p>
                            <p class="price">37 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">VEGETARIANA</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, bakłażan pieczony, papryka duszona, cebula piklowana, cukinia
                            </p>
                            <p class="price">35 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PICCANTE</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, salami Piccante Ventricina, suszone pomidory, peperoncino, płatki chilli
                            </p>
                            <p class="price">38 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PROSCIUTTO E FUNGHI</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, prosciutto Cotto, boczniaki, bazylia, suszone pomidory
                            </p>
                            <p class="price">37 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">QUATTRO FORMAGGI</p>
                            <p class="menu-description">
                                mozzarella fior di latte, sos z gorgonzoli DOP, Taleggio DOP, chips Grana Padano 24 - msc DOP
                            </p>
                            <p class="price">39 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">STRACCIATELLA</p>
                            <p class="menu-description">
                                mozzarella fior di latte, salami Piccante Ventricina, stracciatella, pesto rosso, pomidorki cherry, bazylia
                            </p>
                            <p class="price">37 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">MARGHERITA</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, Grana Padano 24 - msc DOP
                            </p>
                            <p class="price">31 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">SALAME</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, salami Napoli, oliwki Leccino
                            </p>
                            <p class="price">37 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1 mt-5">Antipasti</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">OLIVE TAGGIASCHE</p>
                            <p class="menu-description">
                                oliwki Taggiasche z gospodarstwa rodziny Roi w Badalucco w regionie Ligurii
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">FORMAGGI</p>
                            <p class="menu-description">
                                selekcja włoskich serów z konfiturą z czerwonej cebuli w Aceto Balsamico di Modena
                            </p>
                            <p class="price">20 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">CIPOLLE BORETTANE</p>
                            <p class="menu-description">
                                cebulki borettane w Aceto Balsamico di Modena IGT
                            </p>
                            <p class="price">14 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">BOCCIOLI DI CARCIOFI GRIGLIATI</p>
                            <p class="menu-description">
                                grillowane karczochy w oliwie i occie z natką pietruszki
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PROSCIUTTO DI SAN DANIELE DOP</p>
                            <p class="menu-description">
                                włoska szynka dojrzewająca przez 18 miesięcy wyłącznie w San Daniele del Friuli
                            </p>
                            <p class="price">18 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">COPPA L'ARTEMANO</p>
                            <p class="menu-description">
                                suszona, pełna aromatycznych przypraw, ręcznie robiona karkówka
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1 mt-5">Insalate</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">ZUCCHINO</p>
                            <p class="menu-description">
                                cukinia, pomidory cherry, ricotta, Grana Padano 24-msc DOP, orzechy włoskie,
                                orzechy pinii, pesto bazyliowe, domowe pieczywo
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">INSALATA SAN DANIELE</p>
                            <p class="menu-description">
                                rukola, pomidory cherry, prosciutto San Daniele 18-msc DOP, Grana Padano 24-msc DOP,
                                cebulki borettane, sos vinegret, domowe pieczywo
                            </p>
                            <p class="price">20 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1 mt-5">Dolci</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">CIAOMISU</p>
                            <p class="menu-description">
                                tiramisu z amaretto i kruszonym ciastkiem czekoladowym
                            </p>
                            <p class="price">19 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PANNA COTTA</p>
                            <p class="menu-description">
                                z musem owocowym
                            </p>
                            <p class="price">17 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">SERNIK Z BIAŁĄ CZEKOLADĄ</p>
                            <p class="menu-description">
                                kremowy sernik na mascarpone z musem owocowym na orzechowym spodzie
                            </p>
                            <p class="price">19 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">CANNOLI</p>
                            <p class="menu-description">
                                chrupiąca rurka nadziana kremem z ricotty i pistacji według sycylijskiej receptury
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>
                  -->
                </section>
            </div>
        </div>
    </div>
</header>

@endsection
