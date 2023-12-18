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
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Table</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Action</th>
                </tr>
            </head>
            {{-- <body>
                @foreach ($category as $category)
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
                @endforeach
            </body> --}}


            <tbody>
                @foreach ($reservations as $reservation)

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td
                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $reservation->first_name }} {{ $reservation->last_name }}
                        </td>
                        <td
                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                            {{ $reservation->email }}
                        </td>
                        <td
                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                            {{ $reservation->res_date }}
                        </td>
                        <td
                            {{-- class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                            {{ $reservation->table}} --}}
                        </td>
                        <td
                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                            {{ $reservation->guest_number }}
                        </td>
                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                            <div class="flex space-x-2">
                                {{-- <a href="{{ route('reservations.edit', $reservation->id) }}"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-black">Edit</a> --}}
                                <form
                                    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-black"
                                    method="POST"
                                    action="{{ route('reservations.destroy', $reservation->id) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
