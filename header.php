<!DOCTYPE html>
<html lang="<?php echo bloginfo('languaje'); ?>">
<head>
	<meta charset="UTF-8">
	<?php
$sep  = ' - ';
$name = get_bloginfo('name');

if (is_tax()) {
	 $title = single_term_title( '', false ) . $sep . $name;
}

if (is_single() || is_page()) {
    $title = wp_title($sep, false, 'right') . $name;
}

if (is_category()) {
    $title = single_cat_title('', false) . $sep . $name;
}

if (is_post_type_archive()) {
    $title = post_type_archive_title('', false) . $sep . $name;
}

if (is_day()) {
    $title = 'Post for the day ' . get_the_date('j F, Y') . $sep . $name;
}

if (is_month()) {
    $title = 'Post for the month ' . get_the_date('F, Y') . $sep . $name;
}

if (is_year()) {
    $title = 'Post for the year ' . get_the_date('Y') . $sep . $name;
}

if (is_home() || is_front_page()) {
    $name_page = get_bloginfo('name');

    $title = $name_page . $sep . get_bloginfo('description');
}

?>
	<title>
		<?php echo $title; ?>
	</title>

	<?php $page_option = get_options_page_id('ajustes-generales');?>
	<?php $header      = get_field('cabecera', $page_option)?>
	<link rel="icon" href="<?php echo  $header['favicon'] ?>">
	<meta name="description" content="<?php echo get_bloginfo('description') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
		<?php include get_theme_file_path('/includes/header.php');?>
