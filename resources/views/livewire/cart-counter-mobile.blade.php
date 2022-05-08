<div>
    <li class="nav-item">
        <a onclick="show_hide()" class="nav-link" href="{{route('cart')}}">
          zamówienie ({{\Gloudemans\Shoppingcart\Facades\Cart::content()->count() }})
        </a>
    </li>
</div>
