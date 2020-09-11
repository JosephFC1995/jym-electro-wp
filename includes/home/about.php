<section id="about" class="about py-5">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-12 col-md-6">
				
				<div class="title">

					<div class="top">
								
						Conócenos

					</div>
					
					<h2>
						
						Sobre nosotros

					</h2>

					<div class="bottom-dots clearfix">
		                <span class="dot line-dot"></span>
		                <span class="dot"></span>
		                <span class="dot"></span>
		                <span class="dot"></span>
		            </div>

				</div>
				
				<?php $nosotros = get_field('nosotros'); ?>
				<div class="detalle">
							
					<?php echo $nosotros['contenido'] ?>

					<div class="links-box">
                        <a href="<?php echo home_url('nosotros'); ?>" class="theme-btn btn-style-five">
                            <div class="btn-title"><span class="btn-txt">Conócenos más</span><span class="btn-icon"><i class="fas fa-arrow-right"></i> </span></div>
                        </a>
                    </div>

				</div>

			</div>

			<div class="col-12 col-md-6  image-column">
				<div class="inner">
						<div class="image-box small">
		                <figure class="image-two"><img src="<?php echo $nosotros['primera_imagen'] ?>" alt=""></figure>
		                <figure class="image d-none d-md-block"><img src="<?php echo $nosotros['segunda_imagen'] ?>" alt=""></figure>
		            </div>
				</div>
			

			</div>

		</div>


	</div>

</section>