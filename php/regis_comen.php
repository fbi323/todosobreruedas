<?php
	
	include_once ('../db/utilidades_sql.php');
	if ($_POST){

		
		$nom_comen=isset($_POST ['nom_comen'])?
		 $_POST['nom_comen']:'' ;

		 $email_comen=isset($_POST ['email_comen'])?
		 $_POST['email_comen']:'' ;

		 $tel_comen=isset($_POST ['tel_comen'])?
		 $_POST['tel_comen']:'' ;

		$detal_comen=isset($_POST ['detal_comen'])?
		 $_POST['detal_comen']:'' ;
		
		 $result = set_regis_comen ($nom_comen, $email_comen, $tel_comen, $detal_comen);
		ob_start();
				
				header("refresh:3;url=../index.php");
				if ($result){
					echo"<h3>bien</h3>";
				}else{
					echo"<h3>mal</h3>";
				}
				ob_end_flush();
				die();
 }
?>