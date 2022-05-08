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

                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1">Pizza</h1>
                        </div>
                    </div>

                  @php
                    $i = 0;
                  @endphp

                  @foreach ($products as $product)
                  @if ($i==0)
                    <div class="row">
                  @endif
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">{{$product->name}}</p>
                            <p class="menu-description">
                                {{$product->description}}
                            </p>
                            <p class="price">{{$product->price}} zł</p>
                            <form method="POST" action="{{route('cart.store')}}">
                              @csrf
                              <input type="hidden" name="id" value={{$product->id}}>
                              <button class="order-btn">ZAMÓW</button>
                            </form>
                        </div>
                    @if ($i == 0)
                      @php
                        $i++;
                      @endphp
                    @else
                      @php
                        $i--;
                      @endphp
                        </div>
                        <br>
                    @endif
                  @endforeach


                  <!--

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">{{$product->name}}</p>
                            <p class="menu-description">
                                {{$product->description}}
                            </p>
                            <p class="price">{{$product->prize}} zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">{{$product->name}}</p>
                            <p class="menu-description">
                                {{$product->description}}
                            </p>
                            <p class="price">{{$product->prize}} zł</p>
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

                  -->
                </section>
            </div>
        </div>
    </div>
</header>

@endsection
