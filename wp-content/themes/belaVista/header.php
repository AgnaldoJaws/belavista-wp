<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type"
	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"
	media="screen" />


<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">



<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<?php wp_head(); ?>

<style>


.carousel-inner > .item > img ,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto; }
      
      @media screen and (min-width: 700px) and (max-width:1500px) { 
      .carousel-inner > .item > img {height:430px}
 
 
      }
      
      @media screen and (min-width: 1px) and (max-width:700px) { 
      .carousel-inner > .item > img {height:200px}
 
 iframe {
 height: 400px;	
 }
      }
      
       
</style>



</head>


<body id="myPage" data-spy="scroll" data-target=".navbar"
	data-offset="60">


	<?php require_once 'template/header.php';?>
	
	
  <?php require_once 'template/slider.php';?>
  <div class="panel panel-default">
  <div class="panel-body">
	<?php require_once 'template/sobre.php';?>
	<?php require_once 'template/nossotrabalho.php';?>
	<?php require_once 'template/contato.php';?>
	
 </div>
 
</div>
  	

	<?php require_once 'template/footer.php';?>
    
 


<?php wp_footer();?>

 





	