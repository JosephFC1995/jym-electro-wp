<?php
get_header('other');?>
<?php defined('ABSPATH') || exit;?>

<section class="cabecera-page">
	<div class="image-layer" style="background-image: url(<?php echo get_field('imagen_destacada', 'cpt_producto'); ?>);"></div>
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

<?php 

$terms_categoria = get_terms(
    array(
        'taxonomy'   => 'producto_tax',
        'hide_empty' => true,
        'parent'   => 0
    )
);
 ?>

<?php 

$terms_marcas = get_terms(
    array(
        'taxonomy'   => 'marca_tax',
        'hide_empty' => true,
    )
);
 ?>


<?php

if ($_GET['marca']) {
	$args = array(
		'post_type' => 'producto',
		'posts_per_page' => -1,
		'order' => 'DESC',
		'tax_query' => array(
			array(
			'taxonomy' => 'marca_tax',
			'field' => 'id',
			'terms' => array($_GET['marca']),
			)
		)
	);
}else{
	$args = array(
		'post_type' => 'producto',
		'posts_per_page' => 9,
		'order' => 'DESC',
	);
}


$query = new WP_Query( $args ); ?>


 <section class="products py-4  mt-md-4">

	<div class="container">
 		
 		<div class="row justify-content-center">

 			<div class="col-12 col-md-4">
				
				<div class="d-md-none d-block">
					<ul uk-accordion class="collapse-filters">
					    <li class="">
					        <a class="uk-accordion-title" href="#" style="color: #222222;font-weight: 600;">Filtros</a>
					        <div class="uk-accordion-content">
								<div class="widget--general ">
 					
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
									                <?php $term_children = get_terms(
														    'producto_tax',
														    array(
														        'parent' => $cat->term_id,
														    )
														); ?>
													<?php if ( count($term_children ) > 0): ?>
														<ul uk-accordion class="collapse-filters">
														    <li class="no--link">
														        <a class="uk-accordion-title icon--span--category" href="#" style="font-weight: 600;">
														        	<i class="fas fa-caret-right"></i>
														        </a>
														        <div class="uk-accordion-content">
																	 <ul class="widget--list inner">
																	 	<?php foreach ($term_children as $key => $sub_cat): ?>
																	 		<a href="<?php echo get_term_link( $sub_cat ); ?>" class="widget--link <?php if( (int) $sub_cat->term_id === get_queried_object_id() ) {echo 'current';} ?>">
															                    <?php echo $sub_cat->name; ?>
															                </a>
																	 	<?php endforeach ?>
													                
													                </ul>
													            </div>
													        </li>
													    </ul>
									                <?php endif ?>
									            </li> 
											 <?php endforeach ?>

										</ul>

				 					</div>

				 				</div>
					

				 				<!-- <div class="widget--general ">
				 					
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
									                <a href="<?php echo home_url('producto') .  '/?marca=' . $marca->term_id; ?>" class="widget--link <?php if( (int) $marca->term_id === (int)$_GET['marca'] ) {echo 'current';} ?>">
									                    <?php echo $marca->name; ?>
									                </a>
									            </li> 
											 <?php endforeach ?>

										</ul>

				 					</div>

				 				</div> -->
					        </div>
					    </li>
					</ul>
				</div>

 				<div class="widget--general d-none d-md-block">
 					
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
					                <?php $term_children = get_terms(
										    'producto_tax',
										    array(
										        'parent' => $cat->term_id,
										    )
										); ?>
									<?php if ( count($term_children ) > 0): ?>
										<ul uk-accordion class="collapse-filters">
										    <li class="no--link">
										        <a class="uk-accordion-title icon--span--category" href="#" style="font-weight: 600;">
										        	<i class="fas fa-caret-right"></i>
										        </a>
										        <div class="uk-accordion-content">
													 <ul class="widget--list inner">
													 	<?php foreach ($term_children as $key => $sub_cat): ?>
													 		<a href="<?php echo get_term_link( $sub_cat ); ?>" class="widget--link <?php if( (int) $sub_cat->term_id === get_queried_object_id() ) {echo 'current';} ?>">
											                    <?php echo $sub_cat->name; ?>
											                </a>
													 	<?php endforeach ?>
									                
									                </ul>
									            </div>
									        </li>
									    </ul>
									<?php endif ?>
					               
					            </li> 
							 <?php endforeach ?>

						</ul>

 					</div>

 				</div>
	

 				<!-- <div class="widget--general d-none d-md-block">
 					
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
					                <a href="<?php echo home_url('producto') .  '/?marca=' . $marca->term_id; ?>" class="widget--link <?php if( (int) $marca->term_id === (int)$_GET['marca'] ) {echo 'current';} ?>">
					                    <?php echo $marca->name; ?>
					                </a>
					            </li> 
							 <?php endforeach ?>

						</ul>

 					</div>

 				</div> -->

 			</div>

 			<div class="col-12 col-md-8">


 				<div class="widget--title">
				 						
					<h4>
						<?php echo (empty($_GET['marca']) ? 'Últimos productos' : 'Últimos productos agregados') ?>
						
					</h4>

					<div class="bottom-dots clearfix">
	                    <span class="dot line-dot"></span>
	                    <span class="dot"></span>
	                    <span class="dot"></span>
	                    <span class="dot"></span>
	                </div>

				</div>
 				
 				<div class="row row--products">

 					<?php if ( $query->have_posts() ) :  ?>

		 				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		 					<?php global $post; ?>
						    <div class="col-6 col-md-4  mb-3">
			 					
			 					<div class="product--item">
			 						
			 						<div class="product--content">

			 							<div class="product--marca--image">
			 								<?php $marca = wp_get_post_terms( $post->ID, 'marca_tax' ) ?>
			 								<?php if (count($marca) > 0): ?>
			 									<a href="<?php echo get_term_link( $marca[0] ); ?>"  class="marca--floating">
			 										<img src="<?php echo get_field('imagen', $marca[0]) ?>">
			 									</a>
			 								<?php endif ?>
			 								
			 							</div>
			 							
			 							<div class="product--image">
			 								
			 								<img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="<?php echo get_the_post_thumbnail_caption( null ); ?>">

			 							</div>

			 							<div class="product--name">
			 								
			 								<div>
			 									<h4>
			 									
			 									<?php echo get_the_title(  ); ?>

				 								</h4>

				 								<!-- <a href="<?php echo home_url('contacto') . '?a=' . get_the_title() . '&i=' . get_the_post_thumbnail_url(); ?>" class="theme-btn btn-style-five no">
						                            <div class="btn-title small"><span class="btn-txt">Contactar</span></div>
						                        </a> -->
			 								</div>

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


 			<div class="col-12">
 				<?php include get_theme_file_path('/includes/home/marcas.php'); ?>
 			</div>

 		</div>

 	</div>

 </section>

<!--  <section class="marcas py-4">
 	
 	<div class="container">
 		
 		<div class="row justify-content-center">

 			<?php if ( $query->have_posts() ) :  ?>

 			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			    <div class="col-12 col-md-4">
 				
	 				<div class="imagen--marca products">
	 					
	 					<img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="<?php echo get_the_post_thumbnail_caption( null ); ?>">

	 				</div>

	 			</div>
			  <?php endwhile;?>
 			
 			<?php endif; ?>
 			
 			

 		</div>

 	</div>

 </section -->


<!-- <section class="container py-4">

    <div class="__tabs_container __tabs_wi_auto p-0">
		
		<ul class="uk-subnav uk-subnav-pill tabs_mayor mb-3" uk-switcher="animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
			
			<?php foreach ($terms_categoria as $key => $cat): ?>
			    <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
	                <a href="#">
	                    <?php echo $cat->name; ?>
	                </a>
	            </li> 
			 <?php endforeach ?>

        </ul>

         <ul class="uk-switcher uk-margin uk_tabs_contenes col-animate_state_content_tabs animate_init_fadeOut animate__state mt-4">
			
			<?php foreach ($terms_categoria as $key => $cat): ?>

				<?php
				$args = array(
				'post_type' => 'producto',
				'tax_query' => array(
				    array(
				    'taxonomy' => 'producto_tax',
				    'field' => 'term_id',
				    'terms' => $cat->term_id
				     )
				  )
				);
				$query = new WP_Query( $args ); ?>
				
				<?php if ( $query->have_posts() ) :  ?>

					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			         	<li class="detail--producto">
							
							<div class="detail--producto--contenedor">
								
								<div class="row">
									
									<div class="col-12 col-md-6">
										
										<h2>
											<?php echo get_the_title(); ?>
										</h2>

										<div class="detail--producto--image">
											
											<img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="<?php echo get_the_post_thumbnail_caption( null ); ?>">

										</div>

									</div>

									<div class="col-12 col-md-6">
										
										<div class="detail--producto--detalle">

											<div class="images--marcas">
												
												<?php $terms = wp_get_post_terms( $query->post->ID, array( 'marca_tax' ) ); ?>
												<?php foreach ( $terms as $term ) : ?>
													<div class="imagen">
													
														<img src="<?php echo get_field('imagen', $term) ?>">

													</div>
												
												<?php endforeach; ?>

											</div>
											
											<?php if (get_the_content()): ?>
												<?php echo get_the_content(); ?>
											<?php else: ?>
												<p>No hay descripción sobre este producto</p>
											<?php endif ?>
											

										</div>

									</div>

								</div>

							</div>

			         		

			         	</li>
			         <?php endwhile;?>

	            <?php endif; ?>

	         <?php endforeach ?>

         </ul>

</section> -->
<?php get_footer();?>
