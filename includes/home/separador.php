<section id="separador" class="separador py-5 uk-position-relative">

	

	<div class="bg-pattern-layer"></div>

	<div class="container">

		<?php $separador = get_field('separador'); ?>

		<div class="row">
			
			<div class="col-12 col-md-6">
				
				<div class="title mt-0">

		
					<h4 class="text-uppercase font-weight-bold">
						
						Productos

					</h4>

					<div class="bottom-dots clearfix">
		                <span class="dot line-dot"></span>
		                <span class="dot"></span>
		                <span class="dot"></span>
		                <span class="dot"></span>
		            </div>

				</div>
				<?php $producto = $separador['productos'] ?>
				<div class="image--col uk-position-relative">
					
					<a href="<?php echo home_url('producto') ?>">
						<img src="<?php echo $producto['imagen'] ?>" alt="">

						<div class="floating">
	                        <a href="<?php echo home_url('producto'); ?>" class="theme-btn btn-style-five">
	                            <div class="btn-title"><span class="btn-txt">Ver más</span><span class="btn-icon"><i class="fas fa-arrow-right"></i> </span></div>
	                        </a>
	                    </div>
					</a>

				</div>

			</div>

			<div class="col-12 col-md-6">
				
				<div class="title mt-0">

		
					<h4 class="text-uppercase font-weight-bold">
						
						Servicios

					</h4>

					<div class="bottom-dots clearfix">
		                <span class="dot line-dot"></span>
		                <span class="dot"></span>
		                <span class="dot"></span>
		                <span class="dot"></span>
		            </div>

				</div>

				<div class="image--col uk-position-relative">
					<?php $servicios = $separador['servicios'] ?>
					<a href="<?php echo home_url() .'/servicios' ?>">
						<img src="<?php echo $servicios['imagen'] ?>" alt="">
						<div class="floating">
	                        <a href="<?php echo home_url('servicios'); ?>" class="theme-btn btn-style-five">
	                            <div class="btn-title"><span class="btn-txt">Ver más</span><span class="btn-icon"><i class="fas fa-arrow-right"></i> </span></div>
	                        </a>
	                    </div>
					</a>

				</div>

			</div>

		</div>


	</div>


</section>