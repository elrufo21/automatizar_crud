<?php 
$base_datos = $_REQUEST['nom_tabla'];
$numero_tablas = $_REQUEST['campos_tabla'];


mkdir("../".$base_datos,0777,true);



$archivo_bd = fopen("../../model_class/".$base_datos.".php","w+b"); 
$ruta_controlador = "../".$base_datos."";

$list=fopen("../".$base_datos."/list.php","w+b");



?>