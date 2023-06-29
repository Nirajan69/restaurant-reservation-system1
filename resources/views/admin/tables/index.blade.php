{{-- @extends('admin.layouts.app')

@section('body')
    <div class="card m-2 p-4">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <head>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Status</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                </tr>
            </head>
            <body>
                @foreach ($tables as $table)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        {{-- <td>{{ $category->title }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            @if($category->image)
                            <img  src="{{ asset('') }}uploads/categories/{{$category->image}}" alt="image" height="65px">

                            @else
                            No Image

                            @endif
                        </td>
                        <td>{{ $category->blogs_count }}</td>
                        <td>{{ $category->is_active == 'true' ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>
                            <a href="{{ route('admin.categories.show', $category->id) }}"><button type="submit"
                                    class="btn btn-success mb-2"> Show</button></a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                            --}}
                       {{-- </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
@endsection --}}


{{-- @extends('admin.layouts.app')

@section('body')
    <div class="card m-2 p-4">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <head>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Status</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                </tr>
            </head>
            <body>
                @foreach ($tables as $table)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $table->name }}</td>
                        {{ $table->guest_number }}
                        {{ $table->status->name }}
                        {{ $table->location->name }} --}}

                         {{--<td>{{ $category->slug }}</td>
                        <td>
                            @if($category->image)
                            <img  src="{{ asset('') }}uploads/categories/{{$category->image}}" alt="image" height="65px">

                            @else
                            No Image

                            @endif
                        </td>
                        <td>{{ $category->blogs_count }}</td>
                        <td>{{ $category->is_active == 'true' ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>
                            <a href="{{ route('admin.categories.show', $category->id) }}"><button type="submit"
                                    class="btn btn-success mb-2"> Show</button></a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>

                        </td>
                            --}}

                    {{-- </tr>
                @endforeach
            </body>
        </table>
    </div>
@endsection --}}



@extends('admin.layouts.app')

@section('body')
    <div class="card m-2 p-4">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <head>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Status</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                </tr>
            </head>
            <body>
                @foreach ($tables as $table)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $table->name }}</td>
                      <td>  {{ $table->guest_number }}</td>
                      {{-- <td>  {{ $table->status->name }}</td> --}}
                      <td> {{ $table->status }}</td>
                      {{-- <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $table->status }}
                                            </td> --}}
                                            <td
                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $table->location }}
                                        </td>
                          {{-- {{ $table->location }} --}}

                         {{-- <td>{{ $category->slug }}</td> --}}
                        {{-- <td>
                            @if($category->image)
                            <img  src="{{ asset('') }}uploads/categories/{{$category->image}}" alt="image" height="65px">

                            @else
                            No Image

                            @endif
                        </td> --}}
                        {{-- <td>{{ $category->blogs_count }}</td>
                        <td>{{ $category->is_active == 'true' ? 'Active' : 'Inactive' }}</td> --}}


                        <td>
                            <a href="{{ route('tables.edit', $table->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>
                            {{-- <a href="{{ route('tables.show', $table->id) }}"><button type="submit"
                                    class="btn btn-success mb-2"> Show</button></a> --}}
                            <form action="{{ route('tables.destroy', $table->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>

                        </td>



               </tr>
                @endforeach
            </body>
            </table>
    </div>
@endsection
