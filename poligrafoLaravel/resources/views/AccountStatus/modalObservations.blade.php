<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><i class="fa fa-comments"></i> Observaciones </h4>
        </div>
        <div class="modal-body">
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <ul>
                    {{ $payForCompany[0]->observations_payment }}
                </ul>
            </div>
        </div>
    </div>
</div>