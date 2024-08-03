
<div>
    <div>
   <div class="mx-48 mt-10 flex justify-between text-sm text-slate-400 font-semibold">
    <a class="hover:text-black" href="#" wire:click.prevent="setCategory('All')">All</a>
    @forelse($categories as $category)
        <a class="hover:text-black" href="#" wire:click.prevent="setCategory({{ $category->id }})">{{ $category->name }}</a>
     @empty
        <li>No categories available</li>
    @endforelse
        
</div>
<hr class="mt-4">

<div class="container mx-auto flex flex-wrap gap-4 mt-12 px-20">
    @forelse($products as $item)
    <a href="product/detail-product/{{$item->id}}" class="bg-white shadow-md card pb-4 transition-all hover:scale-105 mt-2 w-60 h-fit hover:bg-slate-100 ">
        <figure>
            <img
              src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
              alt="Shoes" />
          </figure>
        <div class="px-4 mt-2">
            <div>
                <h1 class="font-semibold">{{$item->itemName}}</h1>  
                <h1 class="font-light mt-1">Rp.{{$item->price}}</h1>  
                <h3 class="text-xs badge badge-ghost mt-1">{{$item->category->name}}</h3>  
            </div>

        @auth    
            <div class="mt-4 justify-between flex gap-2">
                <div class="flex border text-slate-400 hover:border-blue-500 hover:text-blue-500 transition-all px-6 py-2 rounded-md w-1/2 items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    <button class="">Cart</button>
                </div>
                <button class="bg-blue-600 text-white px-6 py-2 rounded-md w-1/2 hover:bg-blue-800 transition-all">Buy</button>
            </div>
        </div>
        @else
        <div class="mt-4 justify-between flex gap-2">
            <div class="flex border cursor-not-allowed text-slate-400 px-6 py-2 rounded-md w-1/2 items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
                <button class="">Cart</button>
            </div>
            <button class="bg-slate-400 cursor-not-allowed text-white px-6 py-2 rounded-md w-1/2">Buy</button>
        </div>
    </div>
        @endauth

    </a>
    @empty
        <li>No categories available</li>
    @endforelse
</div>
</div>

</div>
