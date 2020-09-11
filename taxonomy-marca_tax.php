<?php
get_header('other');?>
<?php defined('ABSPATH') || exit;?>

<section class="cabecera-page">
	<div class="image-layer" style="background-image: url(<?php echo get_field('imagen_destacada', 'cpt_producto'); ?>);"></div>
	<div class="uk-overlay-primary uk-position-cover"></div>
	<div class="container">
	     <h1><?php echo single_term_title('', false); ?></h1>
		<div class="breadcrumb-box">
	        <div class="container-list">
	            <ul class="bread-crumb clearfix">
	                <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
	                <li><i class="fas fa-arrow-right"></i></li>
	                <li class="active"><?php echo single_term_title('', false) ?></li>
	            </ul>
	        </div>
	    </div>
	</div>

</section>

<?php 


$terms_categoria = get_terms(
    array(
        'taxonomy'   => 'producto_tax',
        'hide_empty' => false,
    )
);
 ?>


<?php 
	if (is_tax()) {
		$arg_term = array(get_queried_object_id());
	}
	else{
		$arg_term = array();
	}
 ?>


<?php 

$terms_marcas = get_terms(
    array(
        'taxonomy'   => 'marca_tax',
        'hide_empty' => false,
    )
);
 ?>


<?php
$args = array(
'post_type' => 'producto',
 'posts_per_page' => -1,
 'order' => 'ASC',
 'tax_query' => array(
 	array(
		'taxonomy' => 'marca_tax',
		'field' => 'id',
		'terms' => $arg_term,
 	)
 )
);
$query = new WP_Query( $args ); ?>


 <section class="products py-4 mt-4">

	<div class="container">
 		
 		<div class="row justify-content-center">

 			<div class="col-12 col-md-4">

 				<div class="widget--general">
 					
 					<div class="widget--title">
 						
 						<h4>
 							Categorías
 						</h4>

 						<div class="bottom-dots clearfix">
                            <span class="dot line-dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>

 					</div>

 					<div class="widget--body">
 						
						<ul class="widget--list">
							
							<?php foreach ($terms_categoria as $key => $cat): ?>
							    <li class="widget--li">
					                <a href="<?php echo get_term_link( $cat ); ?>" class="widget--link <?php if( (int) $cat->term_id === get_queried_object_id() ) {echo 'current';} ?>">
					                    <?php echo $cat->name; ?>
					                </a>
					            </li> 
							 <?php endforeach ?>

						</ul>

 					</div>

 				</div>


 				<div class="widget--general">
 					
 					<div class="widget--title">
 						
 						<h4>
 							Marcas
 						</h4>

 						<div class="bottom-dots clearfix">
                            <span class="dot line-dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>

 					</div>

 					<div class="widget--body">
 						
						<ul class="widget--list">
							
							<?php foreach ($terms_marcas as $key => $marca): ?>
							    <li class="widget--li">
					                <a href="<?php echo get_term_link( $marca ); ?>" class="widget--link <?php if( (int) $marca->term_id === get_queried_object_id() ) {echo 'current';} ?>">
					                    <?php echo $marca->name; ?>
					                </a>
					            </li> 
							 <?php endforeach ?>

						</ul>

 					</div>

 				</div>

 			</div>

 			<div class="col-12 col-md-8">
 				
 				<div class="row row--products">

 					<?php if ( $query->have_posts() ) :  ?>

		 				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						    <div class="col-12 col-md-4  mb-3">
			 					
			 					<div class="product--item">
			 						
			 						<div class="product--content">
			 							
			 							<div class="product--image">
			 								
			 								<img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="<?php echo get_the_post_thumbnail_caption( null ); ?>">

			 							</div>

			 							<div class="product--name">
			 								
			 								<h4>
			 									
			 									<?php echo get_the_title(  ); ?>

			 								</h4>

			 							</div>

			 						</div>

			 					</div>
				 			
				 			</div>
					  	<?php endwhile;?>

					 <?php else: ?>

					 	<div class="col-12">
					 		
					 		<div class="product--empty">
					 		
						 		<div class="product--emoji">
						 			<i class="far fa-sad-tear"></i>
						 		</div>

						 		<div class="product--empty--title">
						 			
						 			No hay productos para esta categoría.

						 		</div>

						 	</div>

					 	</div>

					 	
		 			
		 			<?php endif; ?>
 				
 				</div>

 			</div>

 		</div>

 	</div>

 </section>

<?php get_footer();?>
