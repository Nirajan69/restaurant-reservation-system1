
@extends('admin.layouts.app')

@section('title', 'Edit Menu')

@section('body')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('menus.update',$menu->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $menu->name }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Menu Image</label>
                    <input type="file" class="form-control" name="image" id="formFile" >
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if($menu->image)
                    <img  src="{{ asset('') }}uploads/menus/{{$menu->image}}" alt="image" height="30px">

                    @else
                    No Image

                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail1" value="{{ $menu->price }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"value="{{  $menu->description }}">{{ $menu->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="sm:col-span-6 pt-5">
                    <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
                    <div class="mt-1">
                        <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1"
                            multiple>



                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option> --}}

                            {{-- @foreach ($selectedCategory as $selectedCategory)
                                    @if ($category->id == $selectedCategory->id)
                                        selected
                                    @endif
                                @endforeach>
                                {{ $category->name }}</option> --}}



                        {{-- @endforeach>
                        </select>
                    </div> --}}

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
