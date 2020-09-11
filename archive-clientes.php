<?php
get_header('other');?>
<?php defined('ABSPATH') || exit;?>

<section class="cabecera-page">
	<div class="image-layer" style="background-image: url(<?php echo get_field('imagen_destacada', 'cpt_clientes'); ?>);"></div>
	<div class="uk-overlay-primary uk-position-cover"></div>
	<div class="container">
	     <h1><?php echo post_type_archive_title('', false); ?></h1>
		<div class="breadcrumb-box">
	        <div class="container-list">
	            <ul class="bread-crumb clearfix">
	                <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
	                <li><i class="fas fa-arrow-right"></i></li>
	                <li class="active"><?php echo post_type_archive_title('', false) ?></li>
	            </ul>
	        </div>
	    </div>
	</div>

</section>




<?php $args = array(
    'post_type' => 'clientes', 
    'posts_per_page' => '-1',
    
);
$query = new WP_Query( $args ); ?>

 <section class="marcas py-4">
 	
 	<div class="container">
 		
 		<div class="row justify-content-center">

 			<?php if ( $query->have_posts() ) :  ?>

 			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			    <div class="col-12 col-md-6">
 				
	 				<div class="imagen--marca clientes">
	 					
	 					<img src="<?php echo get_field('imagen') ?>">

	 				</div>

	 			</div>
			 <?php endwhile;?>
 			
 			<?php endif; ?>

 		</div>

 	</div>

 </section>

<?php get_footer();?>
