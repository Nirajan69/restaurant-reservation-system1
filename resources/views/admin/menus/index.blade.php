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
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </head>
            <body>
                @foreach ($menus as $menu)
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $menu->name }}</td>
                                            {{-- <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <img src="{{ Storage::url($menu->image) }}" class="w-16 h-16 rounded">
                                            </td> --}}
                                            <td>
                                                @if($menu->image)
                                                <img  src="{{ asset('') }}uploads/menus/{{$menu->image}}" alt="image" height="65px">

                                                @else
                                                No Image

                                                @endif
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $menu->price }}
                                            </td>
                                            <td>
                                                <a href="{{ route('menus.edit', $menu->id) }}"><button type="submit"
                                                        class="btn btn-primary mb-2"> Edit</button></a>
                                                {{-- <a href="{{ route('menus.show', $menu->id) }}"><button type="submit"
                                                        class="btn btn-success mb-2"> Show</button></a> --}}
                                                <form action="{{ route('menus.destroy', $menu->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                                </form>
                                            </td>
                                           {{--  <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.menus.edit', $menu->id) }}"
                                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                                                    <form
                                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                        method="POST"
                                                        action="{{ route('admin.menus.destroy', $menu->id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button> --}}
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                {{-- @foreach ($category as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->title }}</td>
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
                        </td>
                    </tr>
                @endforeach --}}
            </body>
        </table>
    </div>
@endsection
