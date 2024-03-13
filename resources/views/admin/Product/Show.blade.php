<div class="modal-content ">
    <div class="modal-header ">
        <h5 class="modal-title " id="orderdetailsModalLabel">Product Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        {{-- <h5 class="mb-2">Product Brand : <span  id="data-Brand"> </span></h5> --}}
        <h5 class="mb-2">Product Description: <span class="text-primary"> </span></h5>
        <p class="mb-4">
            <span id="data-description"></span>         
        </p>
        <div class="table-responsive">
            <table class="table align-middle table-nowrap">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td>
                            <div>
                                <h5 class="text-truncate font-size-14"><span  id="data-name"> </span></h5>
                                
                            </div>
                        </td>
                        <td><span  id="data-Brand"> </span></td>
                        <td><span  id="data-quantity"> </span></td>
                        <td><span  id="data-price"> </span></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>
