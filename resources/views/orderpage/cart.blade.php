@extends('navtemplate')

@section('title')
    Zamówienie - {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count(); }}
@endsection

@section('content')
  <section class="order">
  @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $product)
    <div class="row">
        <div class="col-lg-6 menu-item">
            <p class="menu-title">{{$product->qty}} x {{$product->name}}</p>
            <p class="menu-description">
                {{$product->description}}
            </p>
            <p class="price">{{$product->price*$product->qty}} zł</p>
        </div>
    </div>
  @endforeach
  </section>

@endsection
