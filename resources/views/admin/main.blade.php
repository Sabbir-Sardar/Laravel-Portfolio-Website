@extends('admin.admin_layouts')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-1">Main</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">main</li>
        </ol>
        <form action="{{route('admin_main_update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
        <div class="row">
            <div class="form-groum col-md-3 mt-3">
                <h5>Background Image</h5>
                <img style="height: 30vh" src="{{url($main->bc_img)}}" class="img-thumbnail">
                <input class="mt-3" type="file"id="bc_image"name="bc_image">
            </div>
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="title"><h5>Title</h5></label>
                    <input type="text"class="form-control" id="title" name="title" value="{{$main->title}}">
                </div>
                <div class="mb-3">
                    <label for="title"><h5>Subtitle</h5></label>
                    <input type="text"class="form-control" id="title" name="subtitle" value="{{$main->subtitle}}">
                </div>
                <div class="mb-5">
                    <h5>Upload Resume</h5>
                    <input class="mt-2" type="file" id="resume"name="resume">
                </div>
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-5">
    
    </div>
</form>
</main>
@endsection
                
                