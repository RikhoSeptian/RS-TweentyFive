<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $products, $category, $brandsList;

    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        // lanjutkan yang ini di vidio yang part-23
        // tentang filter produk
        // di menit 9:19 
        
        $this->products = Product::where('category->id',$this->category->id)->where('status', '0')->get();

        return view('livewire.frontend.product.index', [
            'products' => $this->products,
            'category' => $this->category,
        ]);
    }
}
