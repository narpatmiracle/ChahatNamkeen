@extends('layouts.admin')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Orders</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Admin /  Orders list</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">


                        <!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table align-middle table-nowrap table-check">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;" class="align-middle">
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="align-middle">Order ID</th>
                                    <th class="align-middle">Billing Name</th>
                                    <th class="align-middle">Date</th>
                                    <th class="align-middle">Total</th>
                                    <th class="align-middle">Payment Status</th>
                                    <th> Status</th>
                                    <th class="align-middle">Payment Method</th>
                                    <th class="align-middle">View Details</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                            <label class="form-check-label" for="orderidcheck01"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                    <td>Neal Matthews</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $400
                                    </td>
                                   
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                    </td>
                                    
                                    <td>
                                        <select name="" class="changestatus" data-id="#">
                                            <option value="">select status</option>
                                            <option value="0"  selected="selected" >Pending
                                            </option>
                                            <option value="1"  selected="selected" >Accpect
                                            </option>
                                            <option value="2"  selected="selected" >Rejected
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                            data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                            View Details
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a href="javascript:void(0);" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger"><i
                                                    class="mdi mdi-delete font-size-18"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="orderidcheck02">
                                            <label class="form-check-label" for="orderidcheck02"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                    <td>Jamal Burnett</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $380
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                    </td>
                                    
                                    <td>
                                        <select name="" class="changestatus" data-id="#">
                                            <option value="">select status</option>
                                            <option value="0"  selected="selected" >Pending
                                            </option>
                                            <option value="1"  selected="selected" >Accpect
                                            </option>
                                            <option value="2"  selected="selected" >Rejected
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                            data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                            View Details
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a href="javascript:void(0);" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger"><i
                                                    class="mdi mdi-delete font-size-18"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="orderidcheck03">
                                            <label class="form-check-label" for="orderidcheck03"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                    <td>Juan Mitchell</td>
                                    <td>
                                        06 Oct, 2019
                                    </td>
                                    <td>
                                        $384
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                    </td>
                                    
                                    <td>
                                        <select name="" class="changestatus" data-id="#">
                                            <option value="">select status</option>
                                            <option value="0"  selected="selected" >Pending
                                            </option>
                                            <option value="1"  selected="selected" >Accpect
                                            </option>
                                            <option value="2"  selected="selected" >Rejected
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                            data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                            View Details
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a href="javascript:void(0);" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger"><i
                                                    class="mdi mdi-delete font-size-18"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="orderidcheck04">
                                            <label class="form-check-label" for="orderidcheck04"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                    <td>Barry Dick</td>
                                    <td>
                                        05 Oct, 2019
                                    </td>
                                    <td>
                                        $412
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                    </td>
                                    
                                    <td>
                                        <select name="" class="changestatus" data-id="#">
                                            <option value="">select status</option>
                                            <option value="0"  selected="selected" >Pending
                                            </option>
                                            <option value="1"  selected="selected" >Accpect
                                            </option>
                                            <option value="2"  selected="selected" >Rejected
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                            data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                            View Details
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a href="javascript:void(0);" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger"><i
                                                    class="mdi mdi-delete font-size-18"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="orderidcheck05">
                                            <label class="form-check-label" for="orderidcheck05"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                    <td>Ronald Taylor</td>
                                    <td>
                                        04 Oct, 2019
                                    </td>
                                    <td>
                                        $404
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                    </td>
                                    
                                    <td>
                                        <select name="" class="changestatus" data-id="#">
                                            <option value="">select status</option>
                                            <option value="0"  selected="selected" >Pending
                                            </option>
                                            <option value="1"  selected="selected" >Accpect
                                            </option>
                                            <option value="2"  selected="selected" >Rejected
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                            data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                            View Details
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a href="javascript:void(0);" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger"><i
                                                    class="mdi mdi-delete font-size-18"></i></a>
                                        </div>
                                    </td>
                                </tr>
                               

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Modal -->
    <div class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby=orderdetailsModalLabel " aria-hidden="true ">
    <div class="modal-dialog modal-dialog-centered " role="document ">
        <div class="modal-content ">
            <div class="modal-header ">
                <h5 class="modal-title " id="orderdetailsModalLabel">Order Details</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
    <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

    <div class="table-responsive">
    <table class="table align-middle table-nowrap">
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <div>
                        <img src="{{ Asset('adminassets/Uploads/Products/1709615743.png') }}" alt="" class="avatar-sm">
                    </div>
                </th>
                <td>
                    <div>
                        <h5 class="text-truncate font-size-14">Nylon Ganthia</h5>
                        <p class="text-muted mb-0">$ 5 x 50</p>
                    </div>
                </td>
                <td>$ 250</td>
            </tr>
            <tr>
                <th scope="row">
                    <div>
                        <img src="{{ Asset('adminassets/Uploads/Products/1709617512.png') }}" alt="" class="avatar-sm">
                    </div>
                </th>
                <td>
                    <div>
                        <h5 class="text-truncate font-size-14">Chana Chataka</h5>
                        <p class="text-muted mb-0">$ 10 x 50</p>
                    </div>
                </td>
                <td>$ 500</td>
            </tr>
            <tr>
                <td colspan="2">
                    <h6 class="m-0 text-right">Sub Total:</h6>
                </td>
                <td>
                    $ 750
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h6 class="m-0 text-right">Shipping:</h6>
                </td>
                <td>
                    Free
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h6 class="m-0 text-right">Total:</h6>
                </td>
                <td>
                    $ 750
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
    <!-- end modal -->
@endsection
