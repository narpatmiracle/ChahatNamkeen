<div class="modal-content ">
    <div class="modal-header ">
        <h5 class="modal-title " id="orderdetailsModalLabel">Category Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
       
        <h5 class="mb-2">Category Description: <span class="text-primary"> </span></h5>

        <p class="mb-4">

            {{$category->Description}}
        </p>
        <div class="table-responsive">
            <table class="table align-middle table-nowrap">
                <thead>
                    <tr>
                        <th scope="col">category Image</th>
                        <th scope="col">category Name</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <div>
                                <img src="{{ asset('/adminassets/Uploads/Categories').'/'.$category->image }}" alt=""
                                    class="avatar-sm" style="width: auto;">
                            </div>
                        </th>
                        <td>
                            <div>
                                <h5 class="text-truncate font-size-14">{{$category->Name}}</h5>
                            </div>
                        </td>
                       
                            
                               
                            
                        
                        {{-- <td>
                            <td colspan="2">
                                <h6 class="m-0 text-right">Description:</h6>
                            </td>
                            <td>
                                <h5 class="text-truncate font-size-14">{{$category->Description}}</h5>
                            </td>
                           
                        </td> --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>
