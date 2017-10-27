<div id="form-error"></div>
<div class="modal-dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-money"></i> Agregar Pago </h4>
    </div>
    <div class="modal-body">
        <form id="createPayment" name="createPayment" class="form-horizontal form-label-left input_mask">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" id="id" name="id_budget" class="form-control has-feedback-left" value="{{ $id }}" >

            <label class="control-label col-md-3 col-sm-3 col-xs-12">N° Factura Fiscal:</label>
            <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="facture_number" name="facture_number" placeholder="TBSR110000623-00003021">
                <span class="fa fa-file-text-o form-control-feedback left" aria-hidden="true"></span>
            </div>

            <label class="control-label col-md-3 col-sm-3 col-xs-12">Forma de Pago:</label>
            <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                <select id="way_to_pay" name="way_to_pay" class="form-control selc-empresa">
                    <option value="">Seleccione</option>
                    <option value="Cheque">Cheque</option>
                    <option value="ACH">ACH</option>
                    <option value="Tarjeta-de-credito">Tarjeta de crédito</option>
                    <option value="Transferencia electronica">transferencia electrónica</option>
                </select>
                <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
            </div>

            <label class="control-label col-md-3 col-sm-3 col-xs-12">Total a Pagar:</label>
            <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="number" class="form-control has-feedback-left" id="total_pay" name="total_pay" value="{{ $totalPay }}" disabled="true">
                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
            </div>

            <label class="control-label col-md-3 col-sm-3 col-xs-12">Monto a Pagar:</label>
            <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="number" class="form-control has-feedback-left keyUp" id="payment" name="payment" placeholder="1500.00">
                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
            </div>

            <label class="control-label col-md-3 col-sm-3 col-xs-12">Descuento:</label>
            <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="number" class="form-control has-feedback-left keyUp" id="discount" name="discount" placeholder="1500.00">
                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
            </div>

            <label class="control-label col-md-3 col-sm-3 col-xs-12">Observaciones:</label>
            <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                <textarea id="observations" class="form-control" name="observations" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                <span class="fa fa-comment form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="reset" class="btn btn-default" data-dismiss="modal"><i class="fa fa-eye-slash "></i> Cerrar</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i> Pagar</button>
            </div>

        </form>
    </div>
</div><script src="js/validate/fn-createPayment.js"></script>