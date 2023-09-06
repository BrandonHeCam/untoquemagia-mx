<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class CategoriesController extends Component
{
    #[Layout('layouts.admin')]
    #[Title('Mis Categorias')]
    public function render()
    {
        return view('admin.livewire.categories');
    }
}
