@extends('admin.admin_master')
@section('title', 'About')
@section('content')
    <div class="main-content app-content">
        <div class="main-container container-fluid">
            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto"><a href="{{ route('dashboard') }}">Home</a></h4><span
                            class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            About</span>
                    </div>
                </div>
            </div>
            <!-- breadcrumb -->
            <div class="row row-sm">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card  box-shadow-0">
                        <div class="card-header">
                            <h4 class="card-title mb-1">About Page Setup</h4>
                        </div>
                        <div class="card-body pt-0">
                            <form class="form-horizontal" action="{{route('admin.update_about', $about->id)}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="form-label">Title Ar</label>
                                    <input type="text" class="form-control" id="title_ar" name="title_ar"
                                        placeholder="Title In Arabic" value="{{$about->title_ar}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Title En</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en"
                                        placeholder="Title In English" value="{{$about->title_en}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Content Ar</label>
                                    <textarea class="form-control" name="content_ar" id="content_ar" rows="5">{{$about->content_ar}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Content En</label>
                                    <textarea class="form-control" name="content_en" id="content_en" rows="5">{{$about->content_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">About Image</label>
                                    <input type="file" class="form-control" id="about_image" name="about_image"
                                        >
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
