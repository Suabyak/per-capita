@extends('navtemplate')


@section('title')
    - Zamówienie - {{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count(); }}
@endsection

@section('content')
  <form action="{{ route('checkout.address') }}" method="POST" role="form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{ $user->id }}">
  <div class="card-body">


      <label for="email" class="col-form-label pb-0 text-md-end text-dark" >{{ __('Imię i nazwisko') }}</label>
      <div class="form-group">
          <input type="text" name="name" class="form-control mb-3 mt-1" value="{{ $user->name }}" required>
      </div>

      <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('E-mail') }}</label>
      <div class="form-group">
          <input type="email" name="email" class="form-control mb-3 mt-1" value="{{ $user->email }}" required>
      </div>

      <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('Miejscowość') }}</label>
      <div class="form-group">
          <input type="text" name="city" class="form-control mb-3 mt-1" value="{{ $user->city }}" required>
      </div>

      <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('Ulica / nr domu') }}</label>
      <div class="form-group">
          <input type="text" name="street" class="form-control mb-3 mt-1" value="{{ $user->street }}" required>
      </div>

      <label for="email" class="col-form-label pb-0 text-md-end text-dark">{{ __('Kod pocztowy') }}</label>
      <div class="form-group">
        <input  type="text" name="zip" class="form-control mb-3 mt-1" value="{{ $user->zip }}" required>
      </div>
      <div class="row">
          <div class="container mt-3">
            <p class="menu-title mb-2">
              Razem: {{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} zł
            </p>
                  <button type="submit" class="btn">Potwierdź</button>
          </div>
      </div>
  </div>

  </form>
@endsection
