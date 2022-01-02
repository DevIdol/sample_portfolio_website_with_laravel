@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} ">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <form action=" {{route('admin.main.update')}} " method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf


            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                    <img style="height: 30vh" class="img-thumbnail" src=" {{ url($main->bg_img) }} "
                        alt="background_image">
                        <input class="mt-3" type="file" name="bg_img" id="bg_img">
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value=" {{$main->title}} ">

                    </div>
                    <div class="mb-3">
                        <label for="sub_title">Sub Title</label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value=" {{$main->sub_title}} ">
                    </div>
                    <div>
                        <h4>Upload Resume</h4>
                        <input type="file" id="resume" name="resume">
                    </div>
                </div>

            </div>
            <input type="submit" class="btn btn-primary mt-4">
        </form>
        </div>
    </main>
@endsection
