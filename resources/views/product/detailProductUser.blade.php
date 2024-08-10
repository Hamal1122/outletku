@extends('layout')
@section('layout')


<div class="flex">
  <section class=" px-8 container mx-auto my-6 ">

    <div>
      <x-nav-user />
    </div>

    <div class=" flex gap-6 justify-between">
      <div class="mt-6 w-4/6">
        <div class="carousel w-full">
          <div id="item1" class="carousel-item w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp" class="w-full" />
          </div>
          <div id="item2" class="carousel-item w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp" class="w-full" />
          </div>
          <div id="item3" class="carousel-item w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp" class="w-full" />
          </div>
          <div id="item4" class="carousel-item w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp" class="w-full" />
          </div>
        </div>
        <div class="flex w-full justify-center gap-2 py-2">
          <a href="#item1" class="btn btn-xs">1</a>
          <a href="#item2" class="btn btn-xs">2</a>
          <a href="#item3" class="btn btn-xs">3</a>
          <a href="#item4" class="btn btn-xs">4</a>
        </div>

        <div>
          <div class="font-bold text-4xl">
            {{$item -> itemName}}
          </div>
          <div class="text-blue-500 px-4 py-2 bg-blue-50 w-fit rounded-lg mt-4">
            <h3 class="font-bold text-3xl"><span class="text-sm">Rp </span>{{$item -> price}}</h3>
          </div>
        </div>

      </div>

      <div class=" w-2/6 mt-6 justify-center gap-4 shadow-primary flex border rounded-lg ">
        <div>
          <button class="btn" onclick="my_modal_2.showModal()">Add to Cart</button>
          <dialog id="my_modal_2" class="modal">
            <div class="modal-box">
              <h1 class="text-2xl text-center">Cart</h1>
              <h3 class="text-lg font-bold">{{$item -> itemName}}</h3>
              <p class="py-2">Price : {{$item -> price}}</p>
              <div class="mt-4">
                <button class="btn btn-primary">Add</button>
              </div>
            </div>
            <form method="dialog" class="modal-backdrop">
              <button>close</button>
            </form>
          </dialog>
        </div>
        <a href="" class="btn-primary btn px-10">Buy</a>
        <div>

        </div>
      </div>
    </div>

  </section>


</div>