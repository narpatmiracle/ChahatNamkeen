@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Product</h4>



                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Basic Information </h4>

                        <form action="{{ route('Product.Update', $data->id) }}" class="form-horizontal form-wizard-wrapper"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <div id="basic-example">
                                <!-- product Details -->
                                <h3>product Details</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label"> Product
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $data->Name }}" id="formrow-firstname-input"
                                                    placeholder="Enter Your Product Name" id="name">
                                                <span class="text-danger">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Product Code</label>
                                                <input type="text" class="form-control" name="code"
                                                    value="{{ $data->Code }}" id="formrow-firstname-input"
                                                    placeholder="Enter Your Product code" id="code">
                                                <span class="text-danger">
                                                    @error('code')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="productdesc">Product Description</label>
                                                <textarea class="form-control" id="productdesc" name="Description" id="Desc" rows="5"
                                                    placeholder="Product Description">{{ $data->Description }}</textarea>
                                                <span class="text-danger">
                                                    @error('Description')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </section>

                                <!--Pricing Details -->
                                <h3>Pricing Details</h3>
                                <section>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-pancard-input">Quantity</label>
                                                <input type="number" class="form-control" id="stock" name="stock"
                                                    value="{{ $data->Stock }}" placeholder="Enter Your Stock"
                                                    inputmode="numeric">
                                                <span class="text-danger">
                                                    @error('stock')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-vatno-input">Price</label>
                                                <input type="number" class="form-control" autocomplete="off" id="price"
                                                    value="{{ $data->Price }}" name="price"
                                                    placeholder="Enter Your price" inputmode="numeric">
                                                <span class="text-danger">
                                                    @error('price')
                                                        {{ $message }}
                                                    @enderror
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-cstno-input">Discount Price</label>
                                                <input type="number" class="form-control" autocomplete="off"
                                                    id="DiscontPrice" name="DiscontPrice" value="{{ $data->DiscontPrice }}"
                                                    placeholder="Enter Your Discount price" inputmode="numeric">
                                                <span class="text-danger">
                                                    @error('DiscontPrice')
                                                        {{ $message }}
                                                    @enderror
                                                </span>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-servicetax-input">Tax Rate(%)</label>
                                                <input type="number" class="form-control" autocomplete="off" id="TaxRate"
                                                    value="{{ $data->TaxRate }}" name="TaxRate"
                                                    placeholder="Enter Your Discount price" inputmode="numeric">
                                                <span class="text-danger">
                                                    @error('TaxRate')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                </section>

                                <!-- Organizations -->
                                <h3>Organizations</h3>
                                <section>
                                    <div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label>Category</label>
                                                    <select class="form-select" name="categories_id" id="categories_id">
                                                        <option value="">Choose...</option>

                                                        @foreach ($category as $list)
                                                            <option value="{{ $list->id }}"
                                                                {{ $list->id == $data->Categoris_id ? 'selected' : '' }}>
                                                                {{ $list->Name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('categories_id')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label>Tags Type</label>
                                                    <select class="form-select" name="tags" id="tags">
                                                        <option value="">Choose...</option>
                                                        @if ($data->Tags == 'trend')
                                                            <option selected value="trend"> trend</option>
                                                            <option value="unisex"> unisex</option>
                                                        @elseif($data->Tags == 'unisex')
                                                            <option value="trend"> trend</option>
                                                            <option selected value="unisex"> unisex</option>
                                                            ....
                                                        @endif
                                                        {{-- <option value="{{$data->Tags ? 'selected' : 'trend'}}">{{$data->Tags}}</option>
                                                        <option value="{{$data->Tags ? 'selected' : 'unisex'}}">{{$data->Tags}}</option> --}}
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('tags')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-cardno-input">Brand</label>
                                                    <input type="text" class="form-control" id="brand"
                                                        value="{{ $data->Brand }}" name="brand"
                                                        placeholder="Enter Your Brand Name">
                                                    <span class="text-danger">
                                                        @error('brand')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-card-verification-input">Vendor</label>
                                                    <input type="text" class="form-control" name="Vendor"
                                                        value="{{ $data->Vendor }}" id="Vendor"
                                                        placeholder=" Enter Your Vendor">
                                                    <span class="text-danger">
                                                        @error('Vendor')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </section>

                                <!-- Confirm Details -->
                                <h3>Image Uploads</h3>

                                <section>
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mt-3">
                                                    <label for="formFile" class="form-label">Single Product Images
                                                        Details</label>
                                                    <input class="form-control" type="file" name="image"
                                                        id="image" accept="image/png, image/gif, image/jpeg,">
                                                    <img src="{{ asset('/adminassets/Uploads/Products') . '/' . $data->image }}"
                                                        width="80px" style="padding: 10px;">
                                                    <span class="text-danger">
                                                        @error('image')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mt-3">
                                                    <label for="formFile" class="form-label">Multiple Products Images
                                                        Details</label>
                                                    <input type="file" class="form-control"
                                                        accept="image/png, image/gif, image/jpeg," id="fimage"
                                                        name="fimage[]" placeholder="Enter Your Image"  multiple>
                                                </div>
                                                <div style="display: flex; justify-content: space-around;padding:10px;">
                                                    @foreach ($Pimage as $list)
                                                        <div class="col-lg-3">
                                                            <div class="alert alert-success alert-dismissible"
                                                                style="padding: 10px;">
                                                                <button class="btn-close show_confirm" type="button"
                                                                    data-bs-dismiss="alert"
                                                                    data-id="{{ $list->id }}"></button>
                                                                <img src="{{ asset('/adminassets/Uploads/Products/Productimage/' . $list->image) }}"alt=""
                                                                    width="80px">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mt-3">
                                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </section>



                            </div>

                        </form>

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
@endsection
@section('script')
    <script>
       
                $('.btn-close').on('click', function(e){
                    e.preventDefault();
                    if(!confirm('Are you sure you want to delete this?')) {
                        location.reload();
                        }
                    else{
                     var id = $(this).data('id');
                     var url = '{{ route('admin.Pimage.delete',":id") }}';
                     url = url.replace(':id', id);
                     $.ajax({
                         type:'get',
                         url : url,
                         success: function(data) {
                                 location.reload();
                             }   
                     });
                      

                    }
                    
                })
          
          
    </script>
@endsection
