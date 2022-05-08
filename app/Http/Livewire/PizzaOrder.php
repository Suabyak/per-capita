<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class PizzaOrder extends Component
{
    public function render()
    {
        $products =  Product::all();
        // dd($products);
        return view('livewire.pizza-order', ['products' => $products]);
    }

    public function addToCart($productId)
    {
      $product = Product::findOrFail($productId);

      $cartItem = Cart::add($product->id, $product->name, 1, $product->price);
      $cartItem->taxRate = 0;
    }
}
