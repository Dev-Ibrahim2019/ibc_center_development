@extends('admin.admin_master')
@section('title', 'Courses')
@section('content')
    <div class="main-content app-content">
        <div class="main-container container-fluid">
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto"><a href="{{ route('admin.courses.index') }}">Course</a></h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            index</span>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Courses List</h3>
                            <a class="btn btn-primary" href="{{ route('admin.courses.create') }}">Add Course</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border-top-0  table-bordered text-nowrap border-bottom"
                                      id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-5p border-bottom-0">#</th>
                                            <th class="wd-10p border-bottom-0">Course Ar</th>
                                            <th class="wd-10p border-bottom-0">Course En</th>
                                            <th class="wd-15p border-bottom-0">Instructor Ar</th>
                                            <th class="wd-15p border-bottom-0">Instructor En</th>
                                            <th class="wd-15p border-bottom-0">Start At</th>
                                            <th class="wd-15p border-bottom-0">Status</th>
                                            <th class="wd-25p border-bottom-0">Price</th>
                                            <th class="wd-25p border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $course->course_ar }}</td>
                                                <td>{{ $course->course_en }}</td>
                                                <td>{{ $course->instructor_ar }}</td>
                                                <td>{{ $course->instructor_en }}</td>
                                                <td>{{ $course->start_at }}</td>
                                                <td>{{ $course->status }}</td>
                                                <td>{{ $course->price }}</td>
                                                <td>
                                                    <a class=" btn btn-info"
                                                        href="{{ route('admin.courses.edit', $course->id) }}">
                                                        <span class="fe fe-edit"> </span></a>
                                                    <a class="btn btn-danger"
                                                        onclick="confirmDestroy({{ $course->id }}, this)">
                                                        <span class="fe fe-trash-2">
                                                        </span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function confirmDestroy(id, reference) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    destroy(id, reference);
                }
            })
        }

        function destroy(id, reference) {
            axios.delete('/admin/courses/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    showMessage(response.data)
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })
                .then(function() {
                    // always executed
                });
        }

        function showMessage(data) {
            Swal.fire({
                icon: data.icon,
                title: data.title,
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>
@endsection
