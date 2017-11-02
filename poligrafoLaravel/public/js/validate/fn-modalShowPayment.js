function modalPayment(id) {
    $("#myModal").load('create_payment/' + id);
}

function modalObservations(id) {
    $("#observaciones").load('payment_observations/' + id);
}
