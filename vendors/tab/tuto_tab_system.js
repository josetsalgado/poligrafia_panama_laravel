
$(function () {
	$('#myTab a[href="#addTab"]').on('click', function () { 
		var nbrLiElem = ($('ul#myTab li').length) - 1; 

		$('ul#myTab li:last-child').before('<li id="li' + (nbrLiElem + 1) + '"><a href="#tab_content' + (nbrLiElem + 1) + '" role="tab" onclick="removetab()" data-toggle="tab">Prueba ' + (nbrLiElem + 1) + ' <span class="" onclick="removeTab(' + (nbrLiElem + 1) + ');"><span class="glyphicon glyphicon-remove"></span></span></a>');

		nbrLiElem = nbrLiElem + 1; 

		if (nbrLiElem == 3) {
			$("#last").hide();
		}
	});
});

function removeTab(liElem) { 
	$('ul#myTab > li#li' + liElem).fadeOut(1000, function () { 
		$(this).remove(); 

		if (liElem <= 3) {
			$("#last").show("fast");
		}

	}); 
	return false;
}