@extends('navtemplate')


@section('title')
    - Zamówienie - {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }}
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
                <h4>{{$product->qty}} x {{$product->name}}</h4>
                <p>{{$product->price*$product->qty}} zł</p>
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

<section>
      <div class="row">
          <div class="container mt-3">
            @if(!$empty)
            <h4 class="mb-3">
              Razem: {{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} zł
            </h4>

              <a href="{{ route('checkout')  }}"><button class="btn me-3">DOSTAWA I PŁATNOŚĆ</button></a>
              <a href="{{ route('orderpage') }}"><button class="btn">KONTYNUUJ ZAKUPY</button></a>
            @else
              <a href="{{ route('orderpage') }}"><button class="btn">PRZEJDŹ DO MENU</button></a>
            @endif
          </div>
      </div>
</section>
@endsection
