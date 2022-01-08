@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} ">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action=" {{ route('admin.abouts.store') }} " method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Image</h3>
                        <img style="height: 30vh" src="{{ url('assets/img/big_img.jpg') }} " class="img-thumbnail"
                            alt="background_image">
                        <input class="mt-3" type="file" name="img">
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title1">Title 1</label>
                            <input type="text" class="form-control" id="title1" name="title1" value="">

                        </div>
                        <div class="mb-3">
                            <label for="title2">Title 2</label>
                            <input type="text" class="form-control" id="title2" name="title2" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="5"></textarea>
                    </div>

                </div>
                <input type="submit" class="btn btn-primary my-4">
            </form>
        </div>
    </main>
@endsection
