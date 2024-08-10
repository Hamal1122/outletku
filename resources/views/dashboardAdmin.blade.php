@extends('layout')
@section('layout')


<div class="flex">
<div class="w-1/6">
    <x-sidebar-admin/>
</div>
<x:notify::notify />

<section class="w-5/6 container mx-10 my-6 ">

 
  <div class="bg-blue-600 w-fit px-4 py-3 text-white rounded-md my-4 hover:bg-blue-800 transition-all ">
    <a href="{{route ('addProduct')}}">add Product</a>
  </div>

  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="relative  shadow-md">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 overflow-x-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>

                <th scope="col" class="px-6 py-3">
                    Price
                </th>

                <th scope="col" class="px-6 py-3">
                    Stock
                </th>

                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($item as $item)
            <tr class="bg-white border-b">
                <td class="px-6 py-4">{{ $item->itemName }}</td>
                <td class="px-6 py-4">{{ $item->category->name }}</td>
                <td class="px-6 py-4">{{ $item->price }}</td>
                <td class="px-6 py-4">{{ $item->stock }}</td>
                <td class="px-6 py-4">{{ $item->description }}</td>
                <td class="px-6 py-4">
                    <div class="dropdown flex">
                        <div tabindex="0" role="button" class="btn m-1 bg-blue-400 text-white">Action</div>
                        <ul tabindex="0" class="dropdown-content menu gap-2 bg-base-100 rounded-box z-[1] shadow">
                          <li><a class="btn btn-success text-white text-xs" href="">Edit</a></li>
                          <li><a class="btn btn-error text-white text-xs" href="/admin/delete-product/{{ $item->id }}">Delete</a></li>
                          <li><a class="btn btn-warning text-white text-xs" href="/admin/detailProduct/{{ $item->id }}">Detail</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
         @endforeach  
        </tbody>
    </table>
</div>
</section>
</div>
