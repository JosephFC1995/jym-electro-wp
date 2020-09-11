<div class="loading-effect">
	<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>
<?php $page_option = get_options_page_id('ajustes-generales');?>
<?php $footer      = get_field('footer', $page_option)?>
<footer class="footer" id="footer">
	<img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://expgroup.us/wp-content/uploads/2020/03/footer-bg.png" alt="" class="__footer_image">
	<div class="container container--section">

		<div class="row">

			<div class="col-12 col-md-3 mb-3 mb-md-0">
				
				<div class="__logo">
						
					<img src="<?php echo home_url() .'/wp-content/uploads/2020/08/IMG-20180303-WA0001.jpg' ?>" alt="">

				</div>

			</div>
			
			<div class="col-12 col-md-3 mb-3 mb-md-0">
				
				<?php dynamic_sidebar( 'widget-footer-1' ); ?>

			</div>

			<div class="col-12 col-md-3 mb-3 mb-md-0">
				
				<?php dynamic_sidebar( 'widget-footer-2' ); ?>

			</div>

			<div class="col-12 col-md-3 mb-3 mb-md-0">
				
				<?php dynamic_sidebar( 'widget-footer-3' ); ?>

			</div>


		</div>

	</div>

	<div class="container container--copyrate">
		
		<div class="contenerdor--copy">
			
			<div class="row">
			
				<div class="col-12 col-md-6 text-copy">
					
					JyM Electro E.I.R.L. © <?php echo date('Y') ?>. Todos los derechos reservados.

				</div>

				<div class="col-12 col-md-6">
					
					<div class="redes--footer">
						<?php $redes =  $footer['redes_sociales'] ?>
						<ul class="redes">
							<?php foreach ($redes as $key => $red): ?>

								<li>
								
									<a href="<?php echo $red['url'] ?>">
										<?php echo $red['icono'] ?>
									</a>

								</li>
								
							<?php endforeach ?>
							

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

</footer>
<?php wp_footer(); ?>

</body>
</html>