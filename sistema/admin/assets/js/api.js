function excluir(id){
$.ajax({
		url: '../../api/',
		data: "cliente=excluir&id="+id,
		type: "POST",
		async: false,
		success: function(date){
		window.location.reload();
	  }
   });
 }

 function zvisitas(){
$.ajax({
		url: '../../api/',
		data: "cliente=zerarvisitas",
		type: "POST",
		async: false,
		success: function(date){
		window.location.reload();
	  }
   });
 }
 function zrobo(){
$.ajax({
		url: '../../api/',
		data: "cliente=zerarrobo",
		type: "POST",
		async: false,
		success: function(date){
		window.location.reload();
	  }
   });
 }
 function zcell(){
$.ajax({
		url: '../../api/',
		data: "cliente=zerarcell",
		type: "POST",
		async: false,
		success: function(date){
		window.location.reload();
	  }
   });
 }
 function zpc(){
$.ajax({
		url: '../../api/',
		data: "cliente=zerarpc",
		type: "POST",
		async: false,
		success: function(date){
		window.location.reload();
	  }
   });
 }

