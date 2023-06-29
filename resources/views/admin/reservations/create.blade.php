
@extends('admin.layouts.app')

@section('title', 'Add Reservations')

@section('body')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('reservations.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="exampleInputEmail1">
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="exampleInputEmail1">
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone number</label>
                    <input type="text" class="form-control" name="tel_number" id="exampleInputEmail1">
                    @error('tel_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation Date
                    </label>
                    <div class="mt-1">
                        <input type="datetime-local" id="res_date" name="res_date"
                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('res_date')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Guest Number</label>
                    <input type="text" class="form-control" name="guest_number" id="exampleInputEmail1">
                    @error('guest_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                    <label for="status" class="block text-sm font-medium text-gray-700">Table</label>
                    <div class="mt-1">
                        <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }}
                                    ({{ $table->guest_number }} Guests)
                                </option>
                            @endforeach
                        </select>
                  </div>
                    {{--
                    @error('table_id')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Table</label>
                    <input type="text" class="form-control" name="table" id="exampleInputEmail1">
                    @error('table')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="exampleInputEmail1">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Menu Image</label>
                    <input type="file" class="form-control" name="image" id="formFile">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail1">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                    <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
                    <div class="mt-1">
                        <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1"
                            multiple>
                            {{-- @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach --}}
                        {{-- </select>
                    </div>

                </div>  --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
