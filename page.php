<?php
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
<section class="container py-4">

    	<?php

			while (have_posts()): the_post();
			    the_content();
			endwhile;

		?>

</section>
<?php get_footer();?>
