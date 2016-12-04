<?php
	//incluimos el archivo Utilidades_sql.php realiza conexion a base de datos

	include_once ('../db/utilidades_sql.php');
	include_once ('valida.php');



//IF -> condición para traer los datos ifes una sentencia de control
	//$_POST -> Variable constante, trae datos de labase de datos
	if ($_POST){
		$contrasena=isset($_POST['contrasena'])? $_POST['contrasena']:'';
		$confirmar_password=isset($_POST['confirmar_password'])? $_POST['confirmar_password']:'';
		$resultado=validacion($contrasena,$confirmar_password);
		if ($resultado==1){

		// ? $_POST['ciudad']:''  --> Significa que el dato quedaría en blanco en caso de no ser ingresado nada, isset recupera la informacion que tenga en la variable $_POST
		$tipo_doc=isset($_POST ['tipo_doc'])?
		 $_POST['tipo_doc']:'' ;

		 $num_doc=isset($_POST ['num_doc'])?
		 $_POST['num_doc']:'' ;

		 $nom_cli=isset($_POST ['nom_cli'])?
		 $_POST['nom_cli']:'' ;

		 $apelli_cli=isset($_POST ['apelli_cli'])?
		 $_POST['apelli_cli']:'' ;

		$email=isset($_POST ['email'])?
		 $_POST['email']:'' ;

		$contrasena=isset($_POST ['contrasena'])? 
			$_POST['contrasena']:'' ;

		$tel_cli=isset($_POST ['tel_cli'])? 
			$_POST['tel_cli']:'' ;

		$direc_cli=isset($_POST ['direc_cli'])? 
			$_POST['direc_cli']:'' ;

		$ciud_cli=isset($_POST ['ciud_cli'])?
		 $_POST['ciud_cli']:'' ;

		$ubicacion=isset($_POST ['ubicacion'])?
		 $_POST['ubicacion']:'' ;

		 $gene_cli=isset($_POST ['gene_cli'])?
		 $_POST['gene_cli']:'' ;

		 $fec_nac_cli=isset($_POST ['fec_nac_cli'])? 
			$_POST['fec_nac_cli']:'' ;

		 $rol=isset($_POST ['rol'])?
		 $_POST['rol']:'' ;
		 
	$contrasena=password_hash($contrasena, PASSWORD_DEFAULT);
	/*hash es para encriptar la contraseña, se crea una variable contraseña y con ´PASSWORD_DEFAULT se encriptacompletamente de forma predeterminada
	*/

	
	//llamado a la función que va a recibir los datos
	$result = set_regis_cli ($tipo_doc, $num_doc, $nom_cli, $apelli_cli, $email, $contrasena, $tel_cli, $direc_cli, $ciud_cli, $ubicacion, $gene_cli, $fec_nac_cli, $rol);
	if(!$result){
		//!$result sentencia de negacion //
		ob_start();
		//ob_start y ob_end_flush es un ciclo //
		header("refresh:3;url=../form_registro.php");
		echo '<H4> Usuario creado </H4>';
		ob_end_flush();
	}




	}else{

		ob_start();
		//ob_start y ob_end_flush es un ciclo //
		header("refresh:3;url=../form_registro.php");
		echo '<H4> Usuario NO creado </H4>';
		ob_end_flush();
	}
		}else{
	//Redirecciona  al archivo establecido en el parámetro location si la condición no se cumple
		header('location:../index.php');
	// die() Mata o termina la ejecución del archivo
		die();
	}



?>