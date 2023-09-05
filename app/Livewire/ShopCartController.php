<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShopCartController extends Component
{
    #[Layout('layouts.customer')]
    #[Title('Mi Carrito')]
    public function render()
    {
        return view('customer.livewire.shop-cart');
    }
}
