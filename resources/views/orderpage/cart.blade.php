@extends('navtemplate')


@section('title')
    - Zamówienie - {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count(); }}
@endsection

@section('content')
  <section class="order">
  @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $product)
    <div class="row">
        <div class="container">

            <div class="col-lg-12 menu-item cart">
                <p class="menu-title">{{$product->qty}} x {{$product->name}}</p>
                <p class="price">{{$product->price*$product->qty}} zł</p>
                <hr>
            </div>
        </div>
    </div>
  @endforeach

</section>
      <div class="row">
          <div class="container mt-3">
            <p class="menu-title mb-2">
              Razem: {{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} zł
            </p>
              <a href=""><button class="btn me-3">DOSTAWA I PŁATNOŚĆ</button></a>
              <a href="{{ route('orderpage') }}"><button class="btn">KONTYNUUJ ZAKUPY</button></a>
          </div>
      </div>
  </section>
@endsection
