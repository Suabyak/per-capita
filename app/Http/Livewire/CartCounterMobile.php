<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCounterMobile extends Component
{

  protected $listeners = ['cart-update' => 'render'];
  
    public function render()
    {
        return view('livewire.cart-counter-mobile');
    }
}
