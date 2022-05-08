<div>
<a class="dropdown-item" href="{{ route('cart') }}"
   onclick="show_hide()">
     Zamówienie ({{\Gloudemans\Shoppingcart\Facades\Cart::content()->count() }})
</a>
</div>
