<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebCodeAura_by_Emerick
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php 
		if (is_front_page()) {
			wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css');
		} else {
			wp_enqueue_style($pagename . '-style', get_template_directory_uri() . '/css' . '/' . $pagename . '.css');
		}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="logo-website-container">
			<?php
				$url_to_my_attachment = "http://localhost:8888/WebCodeAura/wp-content/uploads/2023/10/WebCodeAura-logo-dark-purple.webp";
				$attachment_id = attachment_url_to_postid($url_to_my_attachment);
				print wp_get_attachment_image($attachment_id);
			?>
			<h2>WebCodeAura</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'Header-Nav'
				)
			);
			?>
			<div class="services-menu-container">
				<button id='button-menu-services'>Services</button>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'Services'
						)
					);
				?>
			</div>
		</nav><!-- #site-navigation -->
		<button id='button-contact-header'>
			<svg xmlns="http://www.w3.org/2000/svg" xml:lang="fr"
			xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 500 500">
				<title>Demandez un devis</title>
				<defs>
					<path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z"
					transform="rotate(12, 250, 250)"/>
				</defs>
				<g class="textcircle">
					<text id="text-elem-text-circle" textLength="925">
						<textpath xlink:href="#textcircle" aria-label="Demandez un devis" textLength="925">
							Demandez un devis | Demandez un devis |
						</textpath>
					</text>
				</g>
			</svg>
			<?php
				$url_to_my_attachment = "http://localhost:8888/WebCodeAura/wp-content/uploads/2023/10/letter-svg.webp";
				$attachment_id = attachment_url_to_postid($url_to_my_attachment);
				print wp_get_attachment_image($attachment_id);
			?>
		</button>
	</header><!-- #masthead -->
