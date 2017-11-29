<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <style>
  	img,
.wp-caption {
	max-width: 100%;


}

  body {background-color:#e6e6e6}
  </style>
</head>
<section class="container-fluid">


		<h3 class="text-center">Novidades</h3>


  			<?php

$aRecentPosts = new WP_Query ( "showposts=20" );
		while ( $aRecentPosts->have_posts () ) :
			$aRecentPosts->the_post ();
			?>
				<div class="panel jumbotron panel-default">
					<div class="panel-body">

						<div class="text-center">
							<h3><?php the_title();?></h3>
							<br><br><br>
						</div>

					<div class="col-md-6">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(550,550))?></a>
					</div>

						<div class="col-md-6">

							<div class="text-justify">
								<h4>
								<?php the_excerpt();?>
								</h4>
								</div>

						<div class="text-center">
							<h5>
						Publicado por <?php the_author()?>
						 em <?php the_date("d/m/Y")?>


				</h5>
				<a href="<?php the_permalink();?>" class="btn btn-success" role="button">Continuar Lendo</a>
						</div>
					</div>
					</div>
					<div id = "chevron"class="container-fluid text-center">
  <a href="<?php echo get_option('home');?>" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

</div>
				</div>


				<?php endwhile; ?>







	</section>


	</html>
