@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Category list</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Admin /  Category list</li>
                    </ol>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="page-title-right">
                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><a
                                href="{{ route('Category.Create') }}" style="color:aliceblue"><i
                                    class="mdi mdi-plus me-1"></i> Add New </a> </button>
                    </div>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th class="align-middle"> Id</th>
                                <th class="align-middle"> Name</th>
                                <th class="align-middle">Image</th>
                                <th class="align-middle">View Details</th>
                                <th class="align-middle"> Status</th>
                                <th class="align-middle">Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($data as $key => $category)
                                <tr>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold"></a>{{ ++$key }}
                                    </td>
                                    <td>{{ $category->Name }} </td>
                                    <td>
                                        <img src="{{ asset('/adminassets/Uploads/Categories') . '/' . $category->image }}"
                                            width="70px">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded ShowModel"
                                            id="ShowModel" data-id="{{ $category->id }}" data-bs-toggle="modal"
                                            data-bs-target=".orderdetailsModal">
                                            View Details
                                        </button>
                                    </td>
                                    <td>
                                        @if ($category->status == 1)
                                            <button type="button" class="btn btn-primary changeStatus"
                                                data-id="{{ $category->id }}">Active</button>
                                        @else
                                            <button type="button" class="btn btn-danger changeStatus"
                                                data-id="{{ $category->id }}">Deactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="{{ Route('category.Edit', $category->id) }}" class="text-success"style="padding: 10px;"><button
                                                    type="button" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z">
                                                        </path>
                                                    </svg>
                                                    Edit
                                                </button></a>
                                            <a href="{{ Route('category.delete', $category->id) }}"
                                                class="text-danger deleteProductpostcategory"
                                                data-id="{{ $category->id }}"><button type="button"
                                                    class="btn btn-outline-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z">
                                                        </path>
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z">
                                                        </path>
                                                    </svg>
                                                    Delete
                                                </button></a>
                                        </div>
                                        
                                    </td>
                                    {{-- <td>
                                        <div class="d-flex gap-3">
                                            <a href="{{ Route('category.Edit', $category->id) }}" class="text-success"
                                                class="btn"><i class="mdi mdi-pencil font-size-18"></i></a>

                                            <a href="{{ Route('category.delete', $category->id) }}" class="text-danger"
                                                class="btn"><i class="mdi mdi-delete font-size-18"></i></a>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    {{-- view Details  --}}
    <div class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby=orderdetailsModalLabel " aria-hidden="true ">
            <div class="modal-dialog modal-dialog-centered " role="document ">
                @include('admin.Category.Show')
                
            </div>
    </div>
        {{-- end View Details --}}
@endsection
@section('script')
    <script>
        $(function() {
            $('.changeStatus').on('click', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var url = '{{ route('Category.chnageStatus') }}';
                $.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        id: id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {

                        location.reload();
                    }
                });
                // alert(id);
            });
        });


        $(function() {
            $('.ShowModel').on('click', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var url = '{{ route("Category.index",":id") }}';
                url = url.replace(':id', id);
                // alert(url);
                $.ajax({
                    type: 'Get',
                    url: url,
                    data: {
                        id: id,
                        url: url,
                    },
                    
                    success: function(response) {
                        $('.modal-content').html(response);
                    }
                });
            });
                // alert(id);
        });
    </script>
@endsection
