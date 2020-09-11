<section id="cliente" class="cliente py-4">
	
	<div class="container">
		
		<div class="title center">

			<!-- <div class="top">
						
				Las mejores marcas del mercado

			</div> -->
			
			<h2>
				
				Marcas

			</h2>

			<div class="bottom-dots clearfix">
                <span class="dot line-dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

		</div>


<?php 

$terms_categoria = get_terms(
    array(
        'taxonomy'   => 'marca_tax',
        'hide_empty' => false,
    )
);
 ?>

		<div class="clientes--carousel">
			
			<?php foreach ($terms_categoria as $key => $cat): ?>
			    <div class="imagen--carousel p-3">
 				
	 				<div class="imagen--marca mb-0">
	 					<a href="<?php echo get_term_link( $cat ); ?>">
	 						<img src="<?php echo get_field('imagen', $cat) ?>">
	 					</a>
	 					
	 				</div>

	 			</div>
			 <?php endforeach ?>


		</div>

	</div>

</section>