<?php

$conexion=mysql_connect("localhost","root","")
 or

  die("Problemas en la conexion");


mysql_select_db("todosobreruedas",$conexion)
 or
  die("Problemas en la selección de la base de datos");

?>	