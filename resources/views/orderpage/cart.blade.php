@extends('navtemplate')


@section('title')
    - Zamówienie - {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count(); }}
@endsection

@section('content')
  <section class="order">
  @php
  $empty = false;
  @endphp
  @forelse(\Gloudemans\Shoppingcart\Facades\Cart::content() as $product)
    <div class="row">
        <div class="container">

            <div class="col-lg-12 menu-item cart">
                <p class="menu-title">{{$product->qty}} x {{$product->name}}</p>
                <p class="price">{{$product->price*$product->qty}} zł</p>
                <hr>
            </div>
        </div>
    </div>
  @empty
  @php
  $empty = true;
  @endphp
  <div class="row">
      <div class="container">

          <div class="col-lg-12 menu-item cart">
              <p class="menu-title">Zamówienie jest puste</p>
              <hr>
          </div>
      </div>
  </div>
  @endforelse

</section>
      <div class="row">
          <div class="container mt-3">
            @if(!$empty)
            <p class="menu-title mb-2">
              Razem: {{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} zł
            </p>
              <a href="{{  route('checkout')  }}"><button class="btn me-3">DOSTAWA I PŁATNOŚĆ</button></a>
              <a href="{{ route('orderpage') }}"><button class="btn">KONTYNUUJ ZAKUPY</button></a>
            @else
              <a href="{{ route('orderpage') }}"><button class="btn">PRZEJDŹ DO MENU</button></a>
            @endif
          </div>
      </div>
  </section>
@endsection
