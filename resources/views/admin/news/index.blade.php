@extends('admin.admin_master')
@section('title', 'News List')
@section('content')
    <div class="main-content app-content">
        <div class="main-container container-fluid">
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto"><a href="{{ route('admin.news.index') }}">News</a></h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            index</span>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">News List</h3>
                            <a class="btn btn-primary" href="{{ route('admin.news.create') }}">Create News</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border-top-0  table-bordered text-nowrap border-bottom"
                                    id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-5p border-bottom-0">#</th>
                                            <th class="wd-10p border-bottom-0">Auther</th>
                                            <th class="wd-15p border-bottom-0">Title_ar</th>
                                            <th class="wd-15p border-bottom-0">Title_en</th>
                                            <th class="wd-25p border-bottom-0">Created At</th>
                                            <th class="wd-25p border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $new)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $new->auther }}</td>
                                                <td>{{ $new->title_ar }}</td>
                                                <td>{{ $new->title_en }}</td>
                                                <td>{{ $new->created_at }}</td>
                                                <td>
                                                    <a class=" btn btn-info"
                                                        href="{{ route('admin.news.edit', $new->id) }}">
                                                        <span class="fe fe-edit"> </span></a>
                                                    <a class="btn btn-danger"
                                                        onclick="confirmDestroy({{ $new->id }}, this)">
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
            axios.delete('/admin/news/' + id)
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
