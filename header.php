<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package electrician
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- <?php wp_body_open(); ?> -->
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'electrician'); ?>
		</a> -->
		<header id="masthead" class="site-header">
			<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
				<div class="container-fluid">
					<a class="navbar-brand d-contents-a logo" href="<?php echo esc_url(home_url('/')); ?>">
						<span class="material-symbols-outlined">home</span>
						<?php bloginfo('name'); ?>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
						aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
								aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'top-menu',
									'menu_id' => 'primary-menu',
									'container' => 'ul',
									'menu_class' => 'navbar-nav justify-content-end flex-grow-1 pe-3 m-0 p-0',
									'walker' => new My_Walker_Menu(),
								)
							);
							?>
							<!-- <hr />
							<p class="d-flex justify-content-center">+7 333 333 33 33</p> -->
						</div>
					</div>
				</div>
			</nav>
		</header>
