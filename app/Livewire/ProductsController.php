<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductsController extends Component
{

    use WithFileUploads;

    #[Rule('required', message: 'El producto deben contar con un nombre')]
    public $name = '';
    #[Rule('required', message: 'El producto debe contar con una descripción')]
    public $description;
    #[Rule('required', message: 'El campo es requerido')]
    #[Rule('numeric', message: 'El valor ingresado no es numérico')]
    public $price;
    #[Rule('required', message: 'El campo es requerido')]
    #[Rule('min:1', message: 'Solo puedes tener un stock minímo de 1')]
    public $stock;
    #[Rule('required', message: 'El campo es requerido')]
    #[Rule('image', message: 'Solo puedes subir imágenes en formato jpg, jpeg, png, bmp, gif, svg, or webp')]
    public $image;
    // #[Rule('required', message: 'Selecciona una categoria')]
    // public $category_id = '';
    public $selected_id;

    #[Layout('layouts.admin')]
    #[Title('Mis Productos')]
    public function render()
    {
        $data = Product::get();
        return view('admin.livewire.products', ['products' => $data]);
    }

    // Método para guardar registros a la BD
    public function Store()
    {
        $this->validate();
        $products = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'image' => $this->image->store('products')
            // 'category_id' => $this->category_id,
        ]);
        $products->save();
        return redirect()->route('admin.dashboard');
    }
}
