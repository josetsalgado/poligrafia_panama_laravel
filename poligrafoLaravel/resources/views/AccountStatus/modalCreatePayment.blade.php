<div id="form-error"></div>

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><i class="fa fa-money"></i> Agregar Pago </h4>
        </div>
        <div class="modal-body">
            <form id="createPay" name="createPay" class="form-horizontal form-label-left input_mask">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" class="form-control has-feedback-left" value="{{ $id }}" >

                <label class="control-label col-md-3 col-sm-3 col-xs-12">N° Factura Fiscal:</label>
                <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="tax_invoice_number" name="tax_invoice_number" value="{{ $payForCompany[0]->tax_invoice_number or '' }}" placeholder=" Ejemplo: TBSR110000623-00003021">
                    <span class="fa fa-file-text-o form-control-feedback left" aria-hidden="true"></span>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Cliente:</label>
                <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                    <select id="client" name="client" class="form-control selc-empresa">
                        <option value="">Seleccione</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id_client }}">{{ $client->name_client }}</option>
                        @endforeach
                    </select>
                    <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Forma de Pago:</label>
                <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                    <select id="method_of_payment" name="method_of_payment" class="form-control selc-empresa">
                        <option value="{{ $payForCompany[0]->method_of_payment or '' }}">
                            @if($payForCompany[0]->method_of_payment)
                                {{ $payForCompany[0]->method_of_payment }}
                            @else
                                Seleccione
                            @endif
                        </option>
                        <option value="ACH">ACH</option>
                        <option value="Cheque">Cheque</option>
                        <option value="Efectivo">Efectivo</option>
                        <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                        <option value="Transferencia Electrónica">Transferencia Electrónica</option>
                    </select>
                    <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                </div>
                <!-- selecciona cheque -->
                <div id="che_n_hidden">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Cheque Nro:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="check_number" value="{{ $payForCompany[0]->check_number or ''}}" name="check_number" placeholder="21649">
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>
                <!-- /. selecciona cheque -->
                <!-- selecciona ACH -->
                <div id="fe_ach_hidden">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" value="{{ $payForCompany[0]->date_ach or '' }}">Fecha ACH:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="date_ach" id="date_ach" class="form-control has-feedback-left" value="10/24/1984" />
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>
                <!-- /.selecciona ACH -->
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Total a Pagar:</label>
                <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="full_payment" name="full_payment" value="{{ $payForCompany[0]->full_payment or ''}}" placeholder="1500.00" disabled="disabled">
                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                </div>
                <!--total a pagar por clientes-->
                <div id="pay_for_client_hidden">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  style="">Pago por clientes:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="pay_for_client" name="pay_for_client" placeholder="1500.00" disabled="disabled" value="{{ $payForCompany[0]->full_payment or ''}}">
                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Monto a Pagar:</label>
                <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="mount_payment" name="mount_payment" placeholder="1500.00">
                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Observaciones:</label>
                <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                    <textarea id="observations_payment" class="form-control" style="padding-left: 55px;" name="observations_payment" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">{{ $payForCompany[0]->observations_payment or '' }}</textarea>
                    <span class="fa fa-comment form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="modal-footer">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close "></i> Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i> Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>

$("#che_n_hidden").attr("style", "display: none;");
$("#fe_ach_hidden").attr("style", "display: none;");
$("#pay_for_client_hidden").attr("style", "display: none;");

$("#method_of_payment").change(function(data){
    var formaPago = $("#method_of_payment").val();
    switch(formaPago){
        case "ach":
            $("#che_n_hidden").attr("style", "display: none;");
            $("#fe_ach_hidden").attr("style", "");
            break;
        case "cheque":
            $("#che_n_hidden").attr("style", "");
            $("#fe_ach_hidden").attr("style", "display: none;");
            break;
        default:
            $("#che_n_hidden").attr("style", "display: none;");
            $("#fe_ach_hidden").attr("style", "display: none;");
            break
    }
});

$("#client").change(){
    var client = $("#client").val();
    if(!client){
        $("#client").val("");
        $("#pay_for_client_hidden").attr("style", "display: none;");
    }else{
        $("#pay_for_client_hidden").attr("style", "");
    }
}
</script>
<script src="js/validate/fn-createAccountStatus.js"></script>