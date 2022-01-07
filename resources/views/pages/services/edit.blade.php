@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} ">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action=" {{route('admin.services.update', $service->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="icon">Font Awsome Icon</label>
                            <input type="text" class="form-control" id="title" name="icon" value="{{$service->icon}}">

                        </div>
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" id="description" name="description">{{$service->description}}" </textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-4">
            </form>
        </div>
    </main>
@endsection
