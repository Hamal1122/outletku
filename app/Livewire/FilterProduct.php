<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\category;
use App\Models\product;

class FilterProduct extends Component
{
    public $category ='All';
    public $ALL;

    public function setCategory($id_category)
    {
        $this->category = $id_category;
    }

    public function render(){
        $product = product::query();

        if($this->category  !== 'All'){
            $product->where('id_category', $this->category);
        }

        $this->ALL = product::all();

        return view('livewire.filter-product', [
            'products'=> $product->get(),
            'categories'=> category::all(),
            'all'=> $this->All(),
        ]);
    }
}
