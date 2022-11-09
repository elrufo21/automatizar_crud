<?php 
require_once "crear_modelclass/accion.php";
$obj_crear_mdclss = new crear_class();

$base_datos = $_REQUEST['nom_tabla'];
$numero_tablas = $_REQUEST['campos_tabla'];

$obj_crear_mdclss->bd=$base_datos;
$obj_crear_mdclss->bd_campos=$numero_tablas;
$obj_crear_mdclss->crear();
$obj_crear_mdclss->escribir();

//controladores 
$list=fopen("../".$base_datos."/list.php","w+b");
$create=fopen("../".$base_datos."/create.php","w+b");
$accion=fopen("../".$base_datos."/accion.php","w+b");









?>