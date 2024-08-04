@extends('layout')
@section('layout')


<div class="flex">
    <section class="w-5/6 container mx-auto my-6 relative">

        <div>
            <x-nav-user/>
        </div>

        <div class="mt-6">
            <div class="carousel w-full">
                <div id="item1" class="carousel-item w-full">
                  <img
                    src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                    class="w-full" />
                </div>
                <div id="item2" class="carousel-item w-full">
                  <img
                    src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                    class="w-full" />
                </div>
                <div id="item3" class="carousel-item w-full">
                  <img
                    src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                    class="w-full" />
                </div>
                <div id="item4" class="carousel-item w-full">
                  <img
                    src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                    class="w-full" />
                </div>
              </div>
              <div class="flex w-full justify-center gap-2 py-2">
                <a href="#item1" class="btn btn-xs">1</a>
                <a href="#item2" class="btn btn-xs">2</a>
                <a href="#item3" class="btn btn-xs">3</a>
                <a href="#item4" class="btn btn-xs">4</a>
              </div>
        </div>

        <br>

       <div>
            <div class="font-bold text-4xl">
                {{$item -> itemName}}
            </div>
            <div class="text-blue-500 px-4 py-2 bg-blue-50 w-fit rounded-lg mt-4">
                <h3 class="font-bold text-3xl"><span class="text-sm">Rp </span>{{$item -> price}}</h3>
            </div>
       </div>

       

    </section>
    <div class=" container gap-4 mx-auto items-center justify-center fixed bottom-0 py-4 shadow-primary flex ">
        <div>
           <a href="" class="border border-slate-400 hover:bg-slate-100 py-3 rounded-lg px-10">Cart</a>
        </div>
            <a href="" class="btn-primary btn px-10">Buy</a>
        <div>

        </div>
   </div>
</div>
