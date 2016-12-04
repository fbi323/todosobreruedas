<?php
//Establecer la recuperación en las constantes para la conexión al motor de la base de datos y accesos a la base de datos que se necesite, La función REQUIRE recupera la información del archivo que esta establecido en los parámetros
//

require ('credenciales_db.php');
//Establecemos la conexión utilizando la clase mysqli, estableciendo los datos recuperados anteriormente

$mysqli = New MySqli (DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($mysqli, "utf8");



//si la conexión genera un error lo recomendable es matar el proceso saliendo del archivo

if ($mysqli -> connect_errno){
	echo "No se pudo establecer la conexión";
	exit; 
}
//Insertar al cliente se divide para loggin
function set_regis_cli ($tipo_doc, $num_doc, $nom_cli, $apelli_cli, $email, $contrasena, $tel_cli, $direc_cli, $ciud_cli, $ubicacion, $gene_cli, $fec_nac_cli, $rol){

	global $mysqli;
	$sql =" INSERT INTO cliente (tipo_doc, num_doc, nom_cli, apelli_cli, email, tel_cli, direc_cli, ciud_cli, _id_ubicacion, gene_cli, fec_nac_cli) 
	VALUES ('{$tipo_doc}','{$num_doc}','{$nom_cli}','{$apelli_cli}','{$email}','{$tel_cli}','{$direc_cli}','{$ciud_cli}','{$ubicacion}','{$gene_cli}','{$fec_nac_cli}')";
	//echo $sql;
	$mysqli -> query($sql);
	if ($mysqli) {
			$result = set_user($email, $contrasena, $rol);
		}
}
/*Insertar el proveedor*/
function set_regis_provee ($tipo_doc_pro, $num_provee, $nom_provee, $email, $contrasena, $tel_provee, $direc_provee, $ciudad_provee, $ubicacion, $fec_creada, $rol){

	global $mysqli;
	$sql =" INSERT INTO proveedor (tipo_doc_pro, num_provee, nom_provee, email, tel_provee, direc_provee, ciudad_provee, _id_ubicacion, fec_creada) 
	VALUES ('{$tipo_doc_pro}','{$num_provee}','{$nom_provee}','{$email}','{$tel_provee}','{$direc_provee}','{$ciudad_provee}','{$ubicacion}','{$fec_creada}')";
	//echo $sql;
	$mysqli -> query($sql);
	if ($mysqli) {
			$result = set_user($email, $contrasena, $rol);
		}
}
/*Insertar el usuario*/
function set_user ($email, $contrasena, $rol){

	global $mysqli;
	//Se realiza la consulta de inserción 
	$sql =" INSERT INTO user (email, contrasena, rol) VALUES ('{$email}','{$contrasena}','{$rol}')";

	//Ejecuta la función
	$mysqli -> query($sql);	
}
/*Insertar los comentarios*/
function set_regis_comen($nom_comen,$email_comen,$tel_comen,$detal_comen){
	global $mysqli;
	$sql =" INSERT INTO comentario (nom_comen, email_comen, tel_comen, detal_comen) VALUES ('{$nom_comen}','{$email_comen}','{$tel_comen}','{$detal_comen}')";
	return
	$mysqli -> query($sql);
}
/*Insertar la categoria*/
function set_regis_cate($tipo_produc, $class_vehi){
	global $mysqli;
	$sql =" INSERT INTO categoria (tipo_produc, class_vehi ) VALUES ('{$tipo_produc}','{$class_vehi}')";
	return
	$mysqli -> query($sql);
}
/*Insertar la ubicacion*/
function set_regis_ubica($departamento,$ciudad){
	global $mysqli;
	$sql =" INSERT INTO ubicacion (departamento, ciudad) VALUES ('{$departamento}','{$ciudad}')";
	return
	$mysqli -> query($sql);
}
/*Insertar la producto*/
function set_produc($ref_produc, $nom_produc, $desc_produc, $val_unita, $cant_produc, $color, $tama_produc, $mate_produc, $entra, $ubicacion, $categoria, $img_rutas){
	global $mysqli;
	$sql =" INSERT INTO producto (ref_produc, nom_produc, desc_produc, val_unita, cant_produc, color, tama_produc, mate_produc, fech_entra,   _id_ubicacion, _id_categoria, img_rutas, visitas) 
	VALUES ('{$ref_produc}','{$nom_produc}','{$desc_produc}','{$val_unita}','{$cant_produc}','{$color}','{$tama_produc}','{$mate_produc}','{$entra}','{$ubicacion}','{$categoria}','{$img_rutas}','0')";
	echo $sql;
	$mysqli -> query($sql);
}

/*function set_regis_provee ($tipo_doc_pro, $num_provee, $nom_provee, $email, $contrasena, $tel_provee, $direc_provee, $ciuda_provee, $depar_provee, $rol){

	global $mysqli;
//Se realiza la consulta de inserción 
	$datos_user= get_user_Byide($email);
	if (!$rol) {
			$rol='provee';
		}
		
	if (!$datos_user) {
		# code...
	
		$sql = "INSERT INTO proveedor (tipo_doc_pro, num_doc, nom_provee, email, tel_provee, direc_provee, ciuda_provee, depar_provee, rol) 
			VALUES ('{$tipo_doc_pro}','{$num_provee}','{$nom_provee}','{$email}','{$tel_provee}','{$direc_provee}','{$ciuda_provee}','{$depar_provee}','{$rol}')";

		$mysqli -> query($sql);
		
		if ($mysqli) {
			$result = set_user($email, $contrasena, $rol);
		}
	}
}*/

/*Consulta de clientes*/
function get_clientes(){
	global $mysqli;
	$sql = "SELECT _id_cliente, num_doc, nom_cli, apelli_cli, email, tel_cli, direc_cli, ciud_cli,ubicacion.departamento, ubicacion.ciudad FROM cliente,ubicacion WHERE cliente._id_ubicacion=ubicacion._id_ubicacion";
	return 	$mysqli ->query($sql);    
}
/*Consulta de proveedor*/
function get_proveedor(){
	global $mysqli;
	$sql = "SELECT _id_provee, num_provee, nom_provee, email, tel_provee, direc_provee, ciudad_provee,ubicacion.departamento, ubicacion.ciudad FROM proveedor,ubicacion WHERE proveedor._id_ubicacion=ubicacion._id_ubicacion";
	return 	$mysqli ->query($sql);    
}
/*Consulta de usuario*/
function get_user_Byide($email){
	global $mysqli;
	$sql ="SELECT email,contrasena,rol FROM user WHERE email='{$email}'";
	$result=$mysqli->query($sql);
	return $result->fetch_assoc();		
	}
/*Consulta de categorias*/
function get_categorias(){

	global $mysqli;
	$sql = "SELECT * FROM categoria ORDER BY tipo_produc";
	return 	$mysqli ->query($sql);
}
/*Consulta de categorias por tipo de producto*/
function get_categoriaByID($categoria){

	global $mysqli;
	$sql = "SELECT tipo_produc FROM categoria WHERE _id_categoria=$categoria";
	return 	$mysqli ->query($sql);
}

/*Consulta de ubicacion*/
function get_ubicacion(){

	global $mysqli;
	$sql = "SELECT * FROM ubicacion ORDER BY departamento";
	return 	$mysqli ->query($sql);
}
/*Consulta de productos llantas*/
function get_produc(){

	global $mysqli;
	$sql = "SELECT fech_entra,_id_produc, nom_produc, img_rutas,val_unita FROM producto, categoria WHERE producto"."._id_categoria=categoria._id_categoria and categoria.tipo_produc='LLANTA' ORDER BY fech_entra";
	echo $sql;
	return 	$mysqli ->query($sql);
}
/*Consulta de productos rines*/
function get_produc122(){

	global $mysqli;
	$sql = "SELECT fech_entra,_id_produc, nom_produc, img_rutas,val_unita FROM producto, categoria WHERE producto"."._id_categoria=categoria._id_categoria and categoria.tipo_produc='RIN' ORDER BY fech_entra";
	echo $sql;
	return 	$mysqli ->query($sql);
}
/*Consulta de productos accesorios*/
function get_produc222(){

	global $mysqli;
	$sql = "SELECT fech_entra,_id_produc, nom_produc, img_rutas,val_unita FROM producto, categoria WHERE producto"."._id_categoria=categoria._id_categoria and categoria.tipo_produc='ACCESORIO' ORDER BY fech_entra";
	echo $sql;
	return 	$mysqli ->query($sql);
}
/*Consulta de productos*/
function get_producto_Byid($id){

	global $mysqli;
	$sql = "SELECT _id_produc, nom_produc, desc_produc, img_rutas, val_unita FROM producto WHERE _id_produc={$id} ";
	echo $sql;
	return 	$mysqli ->query($sql);
    
}


















function get_ultimos(){

	global $mysqli;
	$sql = "SELECT nombre, imagen_preview FROM juego  ORDER BY fecha_entrada DESC LIMIT 4";
	return 	$mysqli ->query($sql);

}
function get_productos(){

	global $mysqli;
	$sql = "SELECT _id_produc, nombre, imagen_preview FROM juego  ORDER BY nombre ";
	return 	$mysqli ->query($sql);

}
function get_vendidos(){

	global $mysqli;
	$sql = "SELECT nombre, imagen_preview FROM juego  ORDER BY nombre DESC LIMIT 4 ";
	return 	$mysqli ->query($sql);

}

function get_cliente_Byid($id){

	global $mysqli;
	$sql = "SELECT _id_cliente, tipo_doc, num_doc, nom_cli, apelli_cli, email, tel_cli, direc_cli, ciud_cli, _id_ubicacion, gene_cli, fec_nac_cli FROM cliente WHERE _id_cliente={$id} ";
	return 	$mysqli ->query($sql);
    
}


?>


 

