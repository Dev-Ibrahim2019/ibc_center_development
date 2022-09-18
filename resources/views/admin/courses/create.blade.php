@extends('admin.admin_master')
@section('title', 'Create Course')
@section('content')
    <div class="main-content app-content">
        <div class="main-container container-fluid">
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto"><a href="{{ route('admin.courses.index') }}">Course</a></h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            Create</span>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Create Course
                            </div>
                            <p class="mg-b-20"></p>
                            <div id="wizard1">
                                <h3>Courses</h3>
                                <section>
                                    <div class="control-group form-group">
                                        <label class="form-label">Course Image</label>
                                        <input type="file" class="form-control required" name="course_image"
                                            id="course_image">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Course Ar.</label>
                                        <input type="text" class="form-control required" name="course_ar" id="course_ar"
                                            placeholder="Course Name in Arabic">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Course En.</label>
                                        <input type="text" class="form-control required" name="course_en" id="course_en"
                                            placeholder="Course Name in English">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 control-group form-group">
                                            <label class="form-label">Start At</label>
                                            <input type="date" class="form-control required" name="start_at"
                                                id="start_at">
                                        </div>
                                        <div class="col-sm-4 control-group form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="Active">Active</option>
                                                <option value="Full">Full up</option>
                                                <option value="Expired">Expired</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 control-group form-group mb-0">
                                            <label class="form-label">Price</label>
                                            <input type="number" class="form-control required" name="price"
                                                id="price" placeholder="Price">
                                        </div>
                                    </div>
                                </section>
                                <h3>Course Details</h3>
                                <section>
                                    <div class="control-group form-group">
                                        <label class="form-label">Topics Ar</label>
                                        <textarea id="topics_ar" name="topics_ar" class="form-control" placeholder="Topics In Arabic"
                                            required="" rows="3"></textarea>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Topics En</label>
                                        <textarea id="topics_en" name="topics_en" class="form-control" placeholder="Topics In English"
                                            required="" rows="3"></textarea>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Objectives Ar</label>
                                        <textarea  id="objectives_ar" name="objectives_ar" class="form-control"
                                            placeholder="Objectives In Arabic" required="" rows="3"></textarea>
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Objectives En</label>
                                        <textarea  id="objectives_en" name="objectives_en" class="form-control"
                                            placeholder="Objectives In English" required="" rows="3"></textarea>
                                    </div>
                                </section>
                                <h3>Instructor</h3>
                                <section>
                                    <div class="control-group form-group">
                                        <label class="form-label">Instructor Image</label>
                                        <input type="file" class="form-control required" id="instructor_image"
                                            name="instructor_image">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Instructor Ar.</label>
                                        <input type="text" class="form-control required" id="instructor_ar"
                                            name="instructor_ar" placeholder="Instructor Name in Arabic">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Instructor En.</label>
                                        <input type="text" class="form-control required" id="instructor_en"
                                            name="instructor_en" placeholder="Instructor Name in English">
                                    </div>
                                </section>
                            </div>
                            {{-- <a class="btn btn-primary text-light mt-3 w-25" onclick="store()">Save</a> --}}
                            <button type="submit" class="btn btn-primary text-light mt-3 px-5">Save</button>
                            <a class="btn btn-primary text-light mt-3" href="{{route('admin.courses.index')}}" >Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"
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
    </script> --}}
    <!--Internal  Form-wizard js -->
    <script src="{{ asset('cms/assets/js/form-wizard.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/parsleyjs/parsley.min.js') }}"></script>
@endsection
