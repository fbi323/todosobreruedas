<?php
	//incluimos el archivo Utilidades_sql.php realiza conexion a base de datos

	include_once ('../db/utilidades_sql.php');

	if ($_POST){

		$tipo_produc=isset($_POST ['tipo_produc'])?
		 $_POST['tipo_produc']:'' ;

		 $class_vehi=isset($_POST ['class_vehi'])?
		 $_POST['class_vehi']:'' ;

	
	$result = set_regis_cate ($tipo_produc, $class_vehi);
	ob_start();
				
				header("refresh:3;url=../index.php");
				if ($result){
					echo"<h3>bien:  </h3>".$tipo_produc;
					mkdir ("../img/".$tipo_produc,0700);
				}else{
					echo"<h3>mal</h3>";
				}
				ob_end_flush();
				die();
 }
?>
