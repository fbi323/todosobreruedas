<?php
	//incluimos el archivo Utilidades_sql.php realiza conexion a base de datos

	include_once ('../db/utilidades_sql.php');



//IF -> condición para traer los datos ifes una sentencia de control
	//$_POST -> Variable constante, trae datos de labase de datos
	if ($_POST){

		$tipo_doc_pro=isset($_POST ['tipo_doc_pro'])?
		 $_POST['tipo_doc_pro']:'' ;

		 $num_provee=isset($_POST ['num_provee'])?
		 $_POST['num_provee']:'' ;

		 $nom_provee=isset($_POST ['nom_provee'])?
		 $_POST['nom_provee']:'' ;

		$email=isset($_POST ['email'])?
		 $_POST['email']:'' ;

		$contrasena=isset($_POST ['contrasena'])? 
			$_POST['contrasena']:'' ;

		$tel_provee=isset($_POST ['tel_provee'])? 
			$_POST['tel_provee']:'' ;

		$direc_provee=isset($_POST ['direc_provee'])? 
			$_POST['direc_provee']:'' ;

		$ciudad_provee=isset($_POST ['ciudad_provee'])?
		 $_POST['ciudad_provee']:'' ;

		$ubicacion=isset($_POST ['ubicacion'])?
		 $_POST['ubicacion']:'' ;

		 $fec_creada=isset($_POST ['fec_creda'])? 
			$_POST['fec_creada']:'' ;

		 $rol=isset($_POST ['rol'])?
		 $_POST['rol']:'' ;
		 
	$contrasena=password_hash($contrasena, PASSWORD_DEFAULT);
	
	$result = set_regis_provee ($tipo_doc_pro, $num_provee, $nom_provee, $email, $contrasena, $tel_provee, $direc_provee, $ciudad_provee, $ubicacion,  $fec_creada, $rol);
	if(!$result){
		//!$result sentencia de negacion //
		ob_start();
		//ob_start y ob_end_flush es un ciclo //
		header("refresh:9;url=../form_loggin.php");
		echo '<H4> Usuario creado </H4>';
		ob_end_flush();
	}



	}else{

	//Redirecciona  al archivo establecido en el parámetro location si la condición no se cumple
		header('location:../index.php');
	// die() Mata o termina la ejecución del archivo
		die();
	}

?>