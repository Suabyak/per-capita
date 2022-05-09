@extends('navtemplate')

@section('title')
    - Zamówienie - {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }}
@endsection

@section('content')
  <form action="{{ route('checkout.address') }}" method="POST" role="form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{ $user->id }}">
  <div class="container mt-6 pb-2 cart">
    <div class="row">

        <div class="col-lg-8">
            <h4><strong>Zamówienie</strong></h4>
            <hr>

            @forelse(\Gloudemans\Shoppingcart\Facades\Cart::content() as $product)
                <div class="row">
                    <div class="container">

                        <div class="col-lg-12 menu-item pb-0 cart">
                            <h4>{{$product->qty}} x {{$product->name}}</h4>
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
                            <h4>Zamówienie jest puste</h4>
                            <hr>
                        </div>
                    </div>
                </div>
            @endforelse

            <h4 class="mt-5">
                Razem: {{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} zł
            </h4>
            <button type="submit" class="btn mb-5">Zamów z obowiązkiem zapłaty</button>
        </div>
      </form>

        <div class="col-lg-4">
            <h4><strong>Dane do dostawy</strong></h4>
            <hr>
          <ul>
              <li>Imię i nazwisko:</li>
              <li class="text-dark"><strong>{{ $user->name }}</strong></li>

              <li class="mt-1">E-mail:</li>
              <li class="text-dark"><strong>{{ $user->email }}</strong></li>

              <li class="mt-1">Miejscowość:</li>
              <li class="text-dark"><strong>{{ $user->city }}</strong></li>

              <li class="mt-1">Ulica / nr domu:</li>
              <li class="text-dark"><strong>{{ $user->street }}</strong></li>

              <li class="mt-1">Kod pocztowy:</li>
              <li class="text-dark"><strong>{{ $user->zip }}</strong></li>
          </ul>
            <hr>
            <form action="{{route('edit')}}">
              <button type="submit" class="btn">Zmień dane do dostawy</button>
            </form>
        </div>
  </div>
@endsection
