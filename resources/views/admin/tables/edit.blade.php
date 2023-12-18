
@extends('admin.layouts.app')

@section('title', 'Add Table')

@section('body')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('tables.update', $table->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $table->name }}">

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Guest Number</label>
                    <input type="text" class="form-control" name="guest_number" id="exampleInputEmail1" value="{{ $table->guest_number }}">
                    @error('guest_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="formFile" class="form-label">Category Image</label>
                    <input type="file" class="form-control" name="image" id="formFile">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}
                {{--<div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}
                {{-- <div class="sm:col-span-6 pt-5">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <div class="mt-1">
                        <select id="status" name="status" class="form-multiselect block w-full mt-1">
                            @foreach (App\Enums\TableStatus::cases() as $status)
                                <option value="{{ $status->value }}" >{{ $status }}</option>
                            @endforeach
                            {{-- @foreach (App\Enums\TableStatus::cases() as $status)
                            <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>
                                {{ $status->name }}</option>
                        @endforeach
                         </select>
                    </div>
                    @error('status')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="selectTable" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status_id[]" multiple
                        aria-label="Default select example">

                        @foreach ($table as $table)
                            <option value="{{ $table }}"
                                @foreach ($selectedtables as $selectedtable)
                                    @if ($table->id == $selectedtable->id)
                                        selected
                                    @endif
                                @endforeach>
                                {{ $table->name }}</option>
                        @endforeach>

                    </select>
                    @error('table_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}

                    <div class="sm:col-span-6 pt-5">
                        <label for="location" class="block text-sm font-medium text-gray-700">Status</label>
                        <div class="mt-1">
                    <select id="status" name="status" class="form-multiselect block w-full mt-1">
                        @foreach (App\Enums\TableStatus::cases() as $status)
                            <option value="{{ $status }}" @selected($table->status == $status)>
                                {{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="sm:col-span-6 pt-5">
                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                    <div class="mt-1">
                        <select id="location" name="location" class="form-multiselect block w-full mt-1">
                            @foreach (App\Enums\TableLocation::cases() as $location)
                                <option value="{{ $location }}" @selected($table->location == $location)>
                                    {{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('location')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6 p-4">
                    {{-- <button type="submit"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
