<?php 

require_once("../api/db.php");

$sql = "SELECT * from adm";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){ 
    $usuario = $row['usuario'];
		$senha = $row['senha'];
}

        if(!empty($usuario) && !empty($senha)){
           header("location: login.php"); 
        }else{
			header("location: cadastrar.php");
		}

?>