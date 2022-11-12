var titulox = "";
var precopreco = "";
var codigo_pro = ""; 
var nomedopro = "";
var codigoverificador = "";
var quantiathumb = "";
var htmlthumb = "";
var codigoverify = ""; 
var imagem_ok = "";
var ficha = "";

function addmeuproduto1(){
var html = document.getElementById("html").value;
titulox = html.split('<title>')[1].split('</title>')[0];
var tt9 = html.split('h1 class="product-title__Title-sc-')[1].split('</h1>')[0];
var tt0 = tt9.split('">');
nomedopro = tt0[1];
precopreco = html.split('priceSales">R$ <!-- -->')[1].split('</div>')[0];
codigo_pro = html.split('/denuncie/')[1].split('"')[0];
var dadosimg = html.split('thumb-gallery__Container-sc-')[1].split('product-info__Cell-sc-')[0];
quantiathumb = (dadosimg.match(/.jpg/g) || []).length;
img01 = html.split('<div class="main-image__Container-sc-')[1].split('<img loading="lazy"')[0];
img02 = img01.split('<source srcset="')[1].split('" media="')[0];
imagem_ok = img02.split('https://images-americanas.b2w.io/produtos')[1].split('"')[0];
var ficha0 = html.split('Ficha')[1].split('denunciar')[0]; 
var ficha1 = ficha0.split('"><tbody>')[1].split('</table>')[0]; 
ficha = "<tbody>"+ficha1; 
var typeimg = imagem_ok[0].indexOf("GG.jpg");

if(typeimg == -1){
thefake_coder();
}else{
thefake_coder();
}
return false;
}


function thefake_coder(){
  $.ajax({
		url: '../../api/index.php',
		data: "acao=adicionar_produto&titulo="+titulox+"&valor="+precopreco+"&codigox="+codigo_pro+"&nome="+nomedopro+"&imagem="+imagem_ok+"&quantia_thumbs="+quantiathumb+"&ficha="+ficha+"&descricao=",
		type: "POST",
		async: false,
		success: function(date){
		if(date.match("ok")){
		alert("Produto foi adicionado com sucesso!");
		window.location.reload();
     	return false;
		}
		else if(date.match("erro")){
		alert('erro 1');
		return false;
		}
		else{ alert('erro 2'); }
	  }
   });
} 