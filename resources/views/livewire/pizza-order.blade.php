<div>
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
          <form wire:submit.prevent="addToCart({{$product->id}})" method="POST" action="{{route('cart.store')}}">
            @csrf
            @auth
            <button class="order-btn">ZAMÓW</button>
            @endauth
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
</div>
