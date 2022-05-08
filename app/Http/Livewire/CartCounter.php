<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCounter extends Component
{

  protected $listeners = ['cart-update' => 'render'];

    public function render()
    {
        return view('livewire.cart-counter');
    }
}
