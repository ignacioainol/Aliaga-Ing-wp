<?php 
$get_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php get_header(); ?>

<? if(strpos($get_uri, 'nosotros')){
	include_once('includes/nosotros.php');
}else if(strpos($get_uri, 'servicios')){
	include_once('includes/servicios.php');
}else if(strpos($get_uri,'certificaciones')){
	include_once('includes/certificaciones.php');
}else if(strpos($get_uri, 'equipos')){
	include_once('includes/equipos.php');
} ?>


<?php get_footer(); ?>