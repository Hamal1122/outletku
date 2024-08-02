@extends('layout')
@section('layout')

<div class="flex">
    <div class="w-1/6">
        <x-sidebar-admin/>
    </div>

   

    <div class="w-5/6 mx-10 my-6">

        <div class="font-black text-3xl">
            <h1>Add Product Page</h1>
        </div>

    <form action="{{ route ('addProductProses')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="mt-10">
            <div class="mt-4">
                <label for="">Product's Name</label>
                <input name="itemName"  id="itemName" type="text" placeholder="Type here" class="input input-bordered w-full mt-1" />
            </div>

            <div class="mt-4">
                <label for="">Category</label>
                <select class="select select-bordered w-full "id="id_category" name="id_category" required ">
                @foreach ($data as $data)
                    <option value="{{$data->id}}">{{ $data->name }}</option>
                @endforeach
                  </select>
            </div>

            <div class="mt-4">
                <label for="">Thumbnail</label>
                <input type="file" class="file-input file-input-bordered w-full mt-1" name="thumbnail" id="thumbnail" />
            </div>
            <div class="mt-4">
                <label for="">Product's Images</label>
                <input type="file" class="file-input file-input-bordered w-full mt-1" name="image" id="image" />
            </div>
            <div class="mt-4">
                <label for="">Price</label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full mt-1" name="price" id="price" />
            </div>
            <div class="mt-4">
                <label for="">Description</label>
                <input type="text" placeholder="Type here" class=" input input-bordered w-full mt-1" name="description" id="description" />
            </div>

            <div class="flex items-center gap-4">
                <div class="bg-transparent w-fit px-4 py-3 border rounded-md my-4 hover:bg-slate-300 transition-all flex items-center gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                    </svg>
                    <a href="{{route ('dashboard.admin')}}"><i class="bi bi-arrow-left-short"></i>Back</a>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary px-6">Submit</button>
                </div>
            </div>
        </form>
        
        </div>    
    </div>
</div>