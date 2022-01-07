@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} ">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action=" {{ route('admin.portfolios.store') }} " method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Big Image</h3>
                        <img style="height: 30vh" src="{{url('assets/img/big_img.jpg')}} " class="img-thumbnail" alt="background_image">
                        <input class="mt-3" type="file" name="big_img">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Small Image</h3>
                        <img style="height: 20vh" src="{{url('assets/img/small_img.jpg')}}" class="img-thumbnail" alt="background_image">
                        <input class="mt-3" type="file" name="small_img">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="">

                        </div>
                        <div class="mb-3">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="client">Client</label>
                            <input type="text" class="form-control" id="client" name="client" value="">

                        </div>
                        <div class="mb-3">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" name="category" value="">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary my-4">
            </form>
        </div>
    </main>
@endsection
