<?php
/**
 * Template Name: Contacto
 *
 */
get_header();?>

<?php
global $post;
$post_slug = $post->post_name;
?>

<section class="cabecera-page">
    <div class="image-layer" style="background-image: url(<?php echo get_the_post_thumbnail_url()  ?>);"></div>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="container">
         <h1><?php echo get_the_title(); ?></h1>
        <div class="breadcrumb-box">
            <div class="container-list">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
                    <li><i class="fas fa-arrow-right"></i></li>
                    <li class="active"><?php echo get_the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="container py-4">
    
    <div class="row">

        <div class="col-12 col-md-6">

            <div class="title">

                <h2>
                    
                    Datos de contacto

                </h2>

                <div class="bottom-dots clearfix">
                    <span class="dot line-dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

            </div>

            <div class="enlaces--contacto">
                
                <div class="enlaces--contacto--item">
                    
                    <div class="enlaces--contacto--icon">
                        
                        <i class="fas fa-map-marker-alt"></i>

                    </div>

                     <div class="enlaces--contacto--text">
                        
                        <h4>
                            Jr.Lampa 1121 Interior 128 Lima
                        </h4>

                    </div>

                </div>


                <div class="enlaces--contacto--item">
                    
                    <div class="enlaces--contacto--icon">
                        
                        <i class="fas fa-phone"></i>

                    </div>

                     <div class="enlaces--contacto--text">
                        
                        <h4>
                            +51 994316432 / +51 957351256
                        </h4>

                    </div>

                </div>


                <div class="enlaces--contacto--item">
                    
                    <div class="enlaces--contacto--icon">
                        
                        <i class="far fa-envelope"></i>

                    </div>

                     <div class="enlaces--contacto--text">
                        
                        <h4>
                            ventas@jymelectro.com
                        </h4>

                    </div>

                </div>

            </div>

            <div class="w-message with_icon type_info">
                <div class="w-message-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="w-message-body">
                    <p>Contáctenos a cualquier momentos y resuelva todas sus dudas sobre nuestros productos y servicios.</p>
                </div>
            </div>

        </div>
        
        <div class="col-12 col-md-6">
            
         <?php

            while (have_posts()): the_post();
                the_content();
            endwhile;

        ?>

        </div>

         <div class="col-12 col-md-12 mt-3">
            
            <div class="page_details <?php echo $post_slug; ?>">

                <?php $location = get_field('ubicacion');?>

                <input type="hidden" value="<?php echo $location['lat']; ?>" id="lati_map">
                <input type="hidden" value="<?php echo $location['lng']; ?>" id="long_map">
                <div id="map_cont" class="mappp" data-lati="<?php echo $location['lat'] ?>" data-long="<?php echo $location['lng'] ?>"></div>

                </div>

            </div>
            

        </div>

    </div>
       

</section>


<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAyPrqZb9nl5EJhvnxMhnZ1Y0lLIUbKe8I&amp;ver=false"></script>
<script>
//
// Google Map
//

jQuery(document).ready(function($) {
    var la = document.getElementById("lati_map").value;
    var lo = document.getElementById("long_map").value;
    var long_valor = la;
    var lati_valor = lo;
    var centerPosition = new google.maps.LatLng(long_valor, lati_valor, 18);
    var position_reference = new google.maps.LatLng(long_valor, lati_valor, 17);
    var style = [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    }
]
    var options = {
        scrollwheel: false,
        zoom: 16,
        center: centerPosition,
        draggable: true, //Desactiva los gestos con el raton
        keyboardShortcuts: false, //Desactiva  el zoom con el + y -
        navigationControl: false,
        streetViewControl: false, //Define al hombrecito del Streep
        mapTypeControlOptions: false,
        disableDefaultUI: true, //Desactiva la escala
        fullscreenControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map_cont'), options);
    map.setOptions({
        styles: style
    });
    var image = {
        url: 'https://static.lennox.com/img/icons/flood-search-pin.svg',
        anchor: new google.maps.Point(30, 30.26),
        size: new google.maps.Size(60, 30.26),
        draggable: false,
    };
    var shadow = {
        url: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKms9GAp1BAL5LThlUEEDeW15b7knda8l_hVetewuEckaQfDBwUleozmk',
        origin: new google.maps.Point(0, 0),
    };
    var marker = new SVGMarker({
        position: position_reference,
        map: map,
        icon: image,
        shadow: shadow
    });
    // var marker = new google.maps.Marker({
    //     position: position_reference,
    //     map: map,
    //     // icon: image,
    //     shadow: shadow,
    //     title: 'Click to zoom'
    // });
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });



});
</script>

<?php get_footer();?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/library/js/SVGMaker/SVGMarker.min.js' ?>"></script>

<script>
    jQuery(document).ready(function($) {
        <?php $message = ''; ?>
        <?php if ($_GET['a']): ?>
            <?php $message =  "'Deseo contactarme con ustedes por este producto:" .  $_GET['a'] .". " . (($_GET['i']) ? " Imagen:" .  $_GET['i'] ."'" : "'")?>
        <?php endif ?>

        var par_pass_line_cont = <?php echo $message ;?>;
        $('.formulario_contacto textarea[name="mensaje"]').val(par_pass_line_cont)
    });
</script>