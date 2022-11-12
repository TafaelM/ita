<?php 
                    $ch = curl_init('http://hwid.allcenter.online:3500/base/'.$cpf.'');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					curl_setopt($ch, CURLOPT_ENCODING , "gzip");
					curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'User-Agent: okhttp/4.9.0'));
					 $retornox = curl_exec($ch);
					 curl_close($ch);
					 
					 if(strpos($retornox, "nome")){
					 $resp0 = getStr($retornox, 'nome":"','"');
					 $resp = explode(" ", $resp0);
					 echo $resp[0];
					 }else{
					 echo "invalido";
					 }
					}
?>