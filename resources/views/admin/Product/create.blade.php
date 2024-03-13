@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add New Product</h4>



                </div>
            </div>
        </div>
                        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Basic Information </h4>

                        <form action="{{ route('Product.store') }}" class="form-horizontal form-wizard-wrapper"
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
                                                    id="formrow-firstname-input" placeholder="Enter Your Product Name"
                                                    id="name">
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
                                                    id="formrow-firstname-input" placeholder="Enter Your Product code"
                                                    id="code">
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
                                                    placeholder="Product Description"></textarea>
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
                                                    placeholder="Enter Your Stock" inputmode="numeric">
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
                                                    name="price" placeholder="Enter Your price" inputmode="numeric">
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
                                                    id="DiscontPrice" name="DiscontPrice"
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
                                                    value="6" name="TaxRate" placeholder="Enter Your Discount price"
                                                    inputmode="numeric">
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
                                                        @foreach ($category as $categoryList)
                                                            <option value="{{ $categoryList->id }}">
                                                                {{ $categoryList->Name }}</option>
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
                                                        <option value="trend">trend</option>
                                                        <option value="unisex">unisex</option>
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
                                                        name="brand" placeholder="Enter Your Brand Name">
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
                                                        id="Vendor" placeholder=" Enter Your Vendor">
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
                                                        accept="image/png, image/gif, image/jpeg," id="fimage" accept="image/png, image/gif, image/jpeg,"
                                                        name="fimage[]" placeholder="Enter Your Image" multiple>
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
