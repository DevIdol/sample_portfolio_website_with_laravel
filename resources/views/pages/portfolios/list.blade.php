@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of portfolios</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} ">Dashboard</a></li>
                <li class="breadcrumb-item active">List of portfolios</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>

                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Samll Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Client</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <th scope="row">{{ $portfolio->id }} </th>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $portfolio->sub_title }} </td>
                                <td><img style="height: 6vh" src="{{url($portfolio->big_img)}}" alt="big_img"> </td>
                                <td> <img style="height: 6vh" src="{{url($portfolio->small_img)}}" alt="small_img"> </td>
                                <td>{{ Str::limit(strip_tags($portfolio->description), 40) }} </td>
                                <td>{{ $portfolio->client }} </td>
                                <td>{{ $portfolio->category }} </td>
                                <td>
                                    <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}"
                                        class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    @endif

                </tbody>
            </table>
        </div>
    </main>

@endsection
