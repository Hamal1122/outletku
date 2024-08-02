<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\category;
use App\Models\product;

class FilterProduct extends Component
{
    public $category;

    public function setCategory($id_category)
    {
        $this->category = $id_category;
    }

    public function render(){
        $product = product::query();

        if($this->category && $this->category !== 'All'){
            $product->where('id_category', $this->category);
        }

        return view('livewire.filter-product', [
            'products'=> $product->get(),
            'categories'=> category::all(),
            'all'=> product::all(),
        ]);
    }
}
