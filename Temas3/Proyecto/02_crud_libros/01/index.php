<?php 

/**
 * index.php 
 * 
 * 
 * @package Temas3\Proyecto\01_crud_libros\01
 * @author  Roberto Pinto
 * 
 * tABLA articulos
 * -id(int)
 * autor(varchar)
 * titulo(varchar)
 * editorial(varchar)
 * genero(varchar)
 * precio(float)
 * 
 */


//carga de librerías

require_once 'libs/functions.php';

//Models

//negociado
$articulos=get_articulos();

//Views 

include 'views/index.views.php';