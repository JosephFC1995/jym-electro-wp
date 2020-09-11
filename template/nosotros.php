<?php
/**
 * Template Name: Nosotros
 *
 */
get_header('other');?>
<?php defined('ABSPATH') || exit;?>

<section class="cabecera-page">
	<div class="image-layer" style="background-image: url(<?php echo get_the_post_thumbnail_url()  ?>);"></div>
	<div class="uk-overlay-primary uk-position-cover"></div>
	<div class="container">
	     <h1><?php echo get_the_title(); ?></h1>
		<div class="breadcrumb-box">
	        <div class="container-list">
	            <ul class="bread-crumb clearfix">
	                <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
	                <li><i class="fas fa-arrow-right"></i></li>
	                <li class="active"><?php echo get_the_title(); ?></li>
	            </ul>
	        </div>
	    </div>
	</div>

</section>

<section class="container--page py-4 uk-position-relative">

	<div class="container">
		<div class="row">
			
			<div class="col-12 col-md-6">
				
				<div class="title">
			
					<div class="top">
						
						<?php echo get_field('sub_titulo') ?>

					</div>

					<h2>
						
						<?php echo get_field('titulo') ?>

					</h2>

					<div class="bottom-dots clearfix">
	                    <span class="dot line-dot"></span>
	                    <span class="dot"></span>
	                    <span class="dot"></span>
	                    <span class="dot"></span>
	                </div>

				</div>

				<div class="detalle">
					
					<?php echo get_field('contenido') ?>

				</div>

			</div>

			<div class="col-12 col-md-6  image-column">
				<div class="inner">
						<div class="image-box">
		                <figure class="image-two"><img src="<?php echo get_field('primera_imagen') ?>" alt=""></figure>
		                <figure class="image d-none d-md-block"><img src="<?php echo get_field('segunda_imagen') ?>" alt=""></figure>
		            </div>
				</div>
			

			</div>

		</div>
	</div>
	
	

		<div class="right-image1 d-none d-md-block">
			<div class="image">
		    	<img src="<?php echo home_url() .'/wp-content/uploads/2020/08/service-right-icon.png' ?>" alt="">
		    </div>
		</div>

</section>

<section class="container">

    	<?php

			while (have_posts()): the_post();
			    the_content();
			endwhile;

		?>

</section>
<?php get_footer();?>
