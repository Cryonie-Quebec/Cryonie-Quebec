<?php
/**
 * @package biztt
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<img id="cryoquebec_title" src="<?php echo get_theme_file_uri( 'images/backgrounds/cryoquebec_name.png' ); ?>"/>
<?php 
get_template_part('skin/template/header/template', 'header_top');
get_template_part('skin/template/header/template', 'slider');
?>
<?php if ( is_front_page() && !is_home() ) {?>
<section id="hompagecontent">
	<div>
		<img source="<?php echo get_theme_file_uri( 'images/backgrounds/cryoquebec_logo.png' ); ?>"/>
		>
		<?php 
		get_template_part('skin/template/home/template', 'boxes');
		?>
	</div>
</section>
<?php }?>
