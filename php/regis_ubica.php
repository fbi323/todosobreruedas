<?php
	//incluimos el archivo Utilidades_sql.php realiza conexion a base de datos

	include_once ('../db/utilidades_sql.php');

	if ($_POST){

		$departamento=isset($_POST ['departamento'])?
		 $_POST['departamento']:'' ;

		 $ciudad=isset($_POST ['ciudad'])?
		 $_POST['ciudad']:'' ;

	
	$result = set_regis_ubica ($departamento, $ciudad);
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