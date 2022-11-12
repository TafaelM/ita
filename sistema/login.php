<?php 
	   
require_once("../api/db.php");

session_start();

$sql = "SELECT * from adm";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){ 
    $id = $row['id'];
    $usuario = $row['usuario'];
	$senha = $row['senha'];
		
}

        if(!empty($usuario) && !empty($senha)){
         
        }else{
			header("location: cadastrar.php");
			
		}

		if(isset($_POST['username']) && isset($_POST['pass'])){
     
        if(!empty($_POST['username']) && !empty($_POST['pass'])){
		$nomelogin = addslashes($_POST['username']);
		$senhalogin = addslashes($_POST['pass']);
         
				$sql = "SELECT * from adm";
				$result = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_array($result)){ 
					$idadmin = $row['id'];
					   $usuarioadmin = $row['usuario'];
						$senhaadmin = $row['senha'];
			}
				 if(!empty($usuarioadmin) && !empty($senhaadmin)){
                    if($nomelogin==$usuarioadmin && $senhalogin==$senhaadmin){
								$_SESSION['nome_admin'] = $usuarioadmin;
								$_SESSION['senha_admin'] = $senhaadmin;
								header("Location: admin/index.php");
								
					}else{
					 ops();
					}
				}else{
					header("location: cadastrar.php");	
				}
	   }
	   }
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Painel Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/csspush.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<script>
	function teste(){
	alert("oioi");
	}
	</script>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Painel Admin
				</span>
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="form" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input autocomplete="off" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input autocomplete="off" class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Logar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	<?php
	function ops(){
	echo '<!-- POPUP -->
	<script>
	window.onload=function(){
	setTimeout(function(){ 
	document.getElementById("pop").innerHTML="";
	}, 4000);
	
	}
	</script>
	     <div id="pop">
            <div  class="truepush_optin_notifications">
                <div style="background-color: #ff6e6e;" class="optinbox_truepush optinbox_plus_truepush optinboxplus_truepush_iframe">
                    <div class="optinbox_plus_tpsection">
                        <div class="optinbox_plus_media d-flex">
                          
                            <div class="optinbox_plus_media_body">
                              <center>  <p style="display: block !important;">Aviso!</p>
                             
                                <p class="subtext">Login ou Senha inválidos.</p>
                            
							</div>
                        </div>
                        <div iclass="optinbox_tpbuttons mt-2 mb-1">
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>';
		}
 ?>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>