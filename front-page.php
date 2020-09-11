<?php get_header(''); ?>

	<?php include dirname(__FILE__) . '/includes/home/slidershow.php'; ?>

<div class="container-fluid uk-position-relative">
	
	<div class="left-image2 d-none d-md-block">
		<div class="image">
	    	<img src="<?php echo home_url(). '/wp-content/uploads/2020/08/b3.png' ?>" alt="">
	    </div>
	</div>
<?php include dirname(__FILE__) . '/includes/home/about.php'; ?>
</div>
		

		<?php include dirname(__FILE__) . '/includes/home/separador.php'; ?>

		<?php include dirname(__FILE__) . '/includes/home/marcas.php'; ?>

		


		<?php include dirname(__FILE__) . '/includes/home/contactar.php'; ?>

		<?php

			while (have_posts()): the_post();
			    the_content();
			endwhile;

		?>
<?php get_footer(); ?>