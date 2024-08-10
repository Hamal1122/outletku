<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function addProduct(){
        $data = category::all();
        return view('addProduct' ,compact('data'));
    }

    public function detailProduct($id){
        $data = product::find($id);
        return view('detailProduct' ,compact('data'));
    }

    public function detailProductUser($id){
        $item = product::findOrFail($id);
        return view('product.detailProductUser' ,compact('item'));
    }

    public function deleteProduct($id){
        $data = product::find($id);
        $data->delete();
        return redirect()->route('dashboard.admin')->with('success', 'Delete Product Succes 👌');
    }
    
    public function addProductProses(Request $request)
    {
        $request->validate(
            [
              'image1' => 'required|mimes:jpg,png|max:10000',
              'image2' => 'required|mimes:jpg,png|max:10000',
              'image3' => 'required|mimes:jpg,png|max:10000',
              
            ],
            [
              'file.required' => 'File tidak boleh kosong',
              'file.mimes' => 'File harus berupa gambar',
              'file.max' => 'File maksimal 10MB'
            ]
          );
      
      
          $image1 = $request->file('image1');
          $image2 = $request->file('image2');
          $image3 = $request->file('image3');
          
          $image1_name = date("d-m-y") . "_" . $request->user()->name . "." . $image1->extension();
          $image2_name = date("d-m-y") . "_" . $request->user()->name . "." . $image2->extension();
          $image3_name = date("d-m-y") . "_" . $request->user()->name . "." . $image3->extension();
      
          //simpan file ke storage
          $image1->storeAs('uploads', $image1_name, 'public');
          $image2->storeAs('uploads', $image2_name, 'public');
          $image3->storeAs('uploads', $image3_name, 'public');
          
      
          //simpan ke database
          $product = new product();
          $product->id_category = $request->id_category;
          $product->itemName = $request->itemName;
          $product->image1 = $image1_name;
          $product->image2 = $image2_name;
          $product->image3 = $image3_name;
          $product->stock = $request->stock;
          $product->price = $request->price;
          $product->description = $request->description;
          $product->save();
      
      
      
          return redirect()->route('dashboard.admin')->with('success', 'Add Product Succes 👌');   
    }
}
