<?php $sliders = get_field('slider') ?>

		
<div class="uk-position-relative slider-home uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade;ratio: 7:3; min-height: 400; max-height: 400; autoplay: true">

    <ul class="uk-slideshow-items">
    	<?php foreach ($sliders as $key => $slider): ?>

    		 <li>
	            <img class="d-none d-md-block" src="<?php echo $slider['imagen_desktop'] ?>" alt="" uk-cover>
	            <img class="d-md-none d-block" src="<?php echo $slider['imagen_movil'] ?>" alt="" uk-cover>
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-position-center uk-position-small uk-text-center">
                    <h1 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0"><?php echo $slider['texto_grande'] ?></h1>
                    <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0"><?php echo $slider['texto_menor'] ?></p>
                </div>
	        </li>
    		
    	<?php endforeach ?>
              
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>