<div class="modal-content ">
    <div class="modal-header ">
        <h5 class="modal-title " id="orderdetailsModalLabel">Banner Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">
        <div class="table-responsive">
            <table class="table align-middle table-nowrap">
                <thead>
                    <tr>
                        <th scope="col">Banner Image</th>
                        <th scope="col">Banner Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <div>
                                <img src="{{ asset('/adminassets/Uploads/Banner').'/'.$Banner->image }}" alt=""
                                    class="avatar-sm" style="width: auto;">
                            </div>
                        </th>
                        <td>
                            <div>
                                <h5 class="text-truncate font-size-14">{{$Banner->Name}}</h5>
                            </div>
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
