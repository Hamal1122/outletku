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
              'image' => 'required|mimes:jpg,png|max:10000',
              'thumbnail' => 'required|mimes:jpg,png|max:10000'
            ],
            [
              'file.required' => 'File tidak boleh kosong',
              'file.mimes' => 'File harus berupa gambar',
              'file.max' => 'File maksimal 10MB'
            ]
          );
      
      
          $image = $request->file('image');
          $thumbnail = $request->file('thumbnail');
          $image_name = date("d-m-y") . "_" . $request->user()->name . "." . $image->extension();
          $thumbnail_name = date("d-m-y") . "_" . $request->user()->name . "." . $thumbnail->extension();
      
          //simpan file ke storage
          $image->storeAs('uploads', $image_name, 'public');
          $thumbnail->storeAs('uploads', $thumbnail_name, 'public');
      
          //simpan ke database
          $product = new product();
          $product->id_category = $request->id_category;
          $product->itemName = $request->itemName;
          $product->thumbnail = $thumbnail_name;
          $product->image = $image_name;
          $product->price = $request->price;
          $product->description = $request->description;
          $product->save();
      
      
      
          return redirect()->route('dashboard.admin')->with('success', 'Add Product Succes 👌');   
    }
}
