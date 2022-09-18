@extends('admin.admin_master')
@section('title', 'Create News')
@section('content')
    <div class="main-content app-content">
        <div class="main-container container-fluid">
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto"><a href="{{ route('admin.news.index') }}">News</a></h4><span
                            class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            Create</span>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            {{-- <form id="create-form"> --}}
            @csrf
            <!-- row -->
            <div class="row row-sm">
                <div class="col-lg-10 m-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 main-content-label">Create News</div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" name="image_name" id="image_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Auther</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="auther" id="auther"
                                            placeholder="Auther">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Title Ar</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title_ar" id="title_ar"
                                            placeholder="Title Arabic">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Title En</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title_en" id="title_en"
                                            placeholder="Title English">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Content Ar</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="content_ar"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Content En</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="content_en"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit"
                                class="btn btn-primary waves-effect waves-light text-light">Create</button>
                            <a class="btn btn-primary waves-effect waves-light" href="{{ route('admin.news.index') }}">
                                Back</a>
                        </div>
                    </div>
                </div>
                <!-- /Col -->
            </div>
            <!-- row closed -->
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"
        integrity="sha512-cJ2vUNryvHzgNJfmFTtZ2VX5EMT5JOU1i8nm+L1kwoHQ9bSqSYdswxyk++9Gi27p3BG2rXZXLMsTsluY4RZSSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: [
                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help',
                'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
@endsection
