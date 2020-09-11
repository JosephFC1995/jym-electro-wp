
<?php get_header(); ?>

<?php 
    global $post;
    $post_slug=$post->post_name;
?>

<div class="page_details <?php echo $post_slug; ?>">

	
	<div class="container-fluid py-4">
		
		<div class="container">
            
            <div class="error-pa">
                
                <span>404</span>

                <p>Creo que no logramos encontrar lo que buscabas</p>

            </div>
			 

		</div>

	</div>

</div>



<?php get_footer(); ?>