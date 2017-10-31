
$(function () {
	$('#myTab a[href="#addTab"]').on('click', function () { 
		var nbrLiElem = ($('ul#myTab li').length) - 1; 
		var nbrLiClick = "#li"+(nbrLiElem + 1) + " a[href='#tab_content"+(nbrLiElem + 1)+"']";

		$('ul#myTab li:last-child').before('<li id="li' + (nbrLiElem + 1) + '"><a href="#tab_content' + (nbrLiElem + 1) + '" role="tab" onclick="removetab()" data-toggle="tab">Prueba ' + (nbrLiElem + 1) + ' <span class="" onclick="removeTab(' + (nbrLiElem + 1) + ');"><span class="glyphicon glyphicon-remove"></span></span></a>');

		$(nbrLiClick).click();
		
		nbrLiElem = nbrLiElem + 1; 

		if (nbrLiElem == 3) {
			$("#last").hide();
		}
	});
});

function removeTab(liElem) { 
	$('ul#myTab > li#li' + liElem).fadeOut(1000, function () { 
		var tab_content = "#tab_content"+liElem;
		var liElemenClick = "#li"+(liElem - 1);
		var tab_content_a = liElemenClick+" a[href='#tab_content"+(liElem - 1)+"']";
		$(this).remove(); 
		$(tab_content).removeClass( "active in" );
		$(tab_content_a).click();


		if (liElem <= 3) {
			$("#last").show("fast");
		}

	}); 
	return false;
}