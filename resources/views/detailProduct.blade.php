@extends('layout')
@section('layout')


<div class="flex">
<div class="w-1/6">
    <x-sidebar-admin/>
</div>
    <section class="w-5/6 container mx-10 my-6 ">
        <div class="font-black text-3xl">
            <h1>Detail Product</h1>
        </div>

        <div class="mt-6">
            <div>
                <div class="mt-4">
                    <h3 class="font-semibold">Product Name</h3>
                    <div class=" px-4 py-2 w-1/2 rounded-md border-2 text-sm">{{$data -> itemName}}</div>
                </div>
                <div class="mt-4">
                    <h3 class="font-semibold">Price</h3>
                    <div class=" px-4 py-2 w-1/2 rounded-md border-2 text-sm">{{$data -> price}}</div>
                </div>
                <div class="mt-4">
                    <h3 class="font-semibold">Product Category</h3>
                    <div class=" px-4 py-2 w-1/2 rounded-md border-2 text-sm">{{$data->category->name}}</div>
                </div>
                <div class="mt-4">
                    <h3 class="font-semibold">Product Name</h3>
                    <div class=" px-4 py-2 w-1/2 rounded-md border-2 text-sm">{{$data -> itemName}}</div>
                </div>
                

            </div>
            
        </div>

    </section>
</div>
