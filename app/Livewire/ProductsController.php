<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProductsController extends Component
{
    #[Layout('layouts.admin')]
    #[Title('Mis Productos')]
    public function render()
    {
        return view('admin.livewire.products.products');
    }
}
