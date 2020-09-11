<section id="cliente" class="cliente py-4">
	
	<div class="container">
		
		<div class="title center">

			<div class="top">
						
				Ellos confian en nosotros

			</div>
			
			<h2>
				
				Nuestros cliente

			</h2>

			<div class="bottom-dots clearfix">
                <span class="dot line-dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

		</div>


<?php $args = array(
    'post_type' => 'clientes', 
    'posts_per_page' => '-1',
    
);
$query = new WP_Query( $args ); ?>

		<div class="clientes--carousel">
			
			<?php if ( $query->have_posts() ) :  ?>

 			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			    <div class="imagen--carousel p-3">
 				
	 				<div class="imagen--marca mb-0">
	 					
	 					<img src="<?php echo get_field('imagen') ?>">

	 				</div>

	 			</div>
			 <?php endwhile;?>
 			
 			<?php endif; ?>


		</div>

	</div>

</section>