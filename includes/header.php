<?php $page_option = get_options_page_id('ajustes-generales');?>
<?php $header      = get_field('cabecera', $page_option)?>
<header id="header" class="header header--basic">
	<div class="header--top">
		<div class="container">

			<div class="header--contenedor">

				<?php $links =  $header['enlaces_de_contacto'] ?>

				<div class="header--list">
					
					<?php foreach ($links as $key => $link): ?>

						<div class="header--li">
							<?php if ($link['url']): ?>
								<a href="<?php echo $link['url'] ?>" target="_blank">
							<?php else: ?>
								<a target="_blank">
							<?php endif ?>
							

								<div class="header--ico">

									<?php echo $link['icono'] ?>

								</div>

								<div class="header--text">

									<span>
										<?php echo $link['texto'] ?>
									</span>

								</div>
								
							</a>
						</div>
						
					<?php endforeach ?>

				</div>

				<div class="header--actions">
					


				</div>

			</div>

		</div>
	</div>

	<div class="header--medium">
		
		<div class="container">
			
			<div class="header--dividir--menu">
				
				<div class="header--logo">
					
					<a href="<?php echo home_url( '', null ); ?>">
						
						<img src="<?php echo $header['logo'] ?>" alt="Logo">

					</a>

				</div>

				<div class="header--contact">
					
						<div class="header--menu">
					
							<?php wp_nav_menu(
							    array(
							        'theme_location' => 'navegation',
							        'menu_class'     => 'menu__',
							        'menu_id'        => 'menu-principal',
							    )
							);?>

						</div>

				</div>

				<div class="header--cart d-flex d-md-none">

					<a id="menu--movil" class="header--cart--content menu--icon d-flex d-md-none">
						<i class="fas fa-bars"></i>
					</a>
					

				</div>

			</div>

		</div>

	</div>

</header>

<div class="overlay--menu"></div>

<div class="menu--movil--continer">
	
	<div class="contenedor--movil">
		
		<section class="section--division form--search d-block d-md-none">
	        <div class="container--inner d-flex align-items-center">
	            <div class="form--container">
	               
	            </div>
	            <div id="close-menu">
	            	<i class="fas fa-times"></i>
	            </div>
	        </div>
	    </section>

	    <div class="menu--item">
	                	
        	<?php wp_nav_menu(
			    array(
			        'theme_location' => 'navegation',
			        'menu_class'     => 'menu__',
			        'menu_id'        => 'menu-principal',
			    )
			);?>


        </div>

        <div class="menu--footer">
        	
        	<div class="header--list">


        		<?php $links =  $header['enlaces_de_contacto'] ?>


				<?php foreach ($links as $key => $link): ?>

					<div class="header--li">
						<a href="<?php echo $link['url'] ?>" target="_blank">

							<div class="header--ico">

								<?php echo $link['icono'] ?>

							</div>

							<div class="header--text">

								<span>
									<?php echo $link['texto'] ?>
								</span>

							</div>
							
						</a>
					</div>
					
				<?php endforeach ?>

			</div>

        </div>

	</div>

</div>