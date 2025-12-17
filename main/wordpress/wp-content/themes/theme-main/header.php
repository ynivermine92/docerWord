<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php global $geniuscourses_options; ?>












	<header>
		<!-- Navbar -->
		<div class="header">
			<div class="wrapper">
				<div class="navbar">
					<div class="logo">
						<?
						if (function_exists('has_custom_logo')) {
						?>
							<a href="<?php echo esc_url(home_url("/")); ?>"> <? the_custom_logo(); ?> </a>
						<?
						}
						?>
					</div>
					<nav>
						<ul class="menu">
							<?php
							wp_nav_menu(array(
								'theme_location'  => 'header_nav',
								'container'      => false,
								'items_wrap'     => '%3$s',
							));
							?>
						</ul>
					</nav>

					<button class="burger">
						<span></span>
					</button>
				</div>

			</div>
		</div>
	</header>


							
	<!-- <svg class="navbar__menu-arrow">
		<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg/arrow.svg#arrow"></use>
	</svg> -->