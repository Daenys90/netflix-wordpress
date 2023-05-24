<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package templatebase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'templatebase' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row">
		<div class="site-branding col-md-2 ms-5">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			// else :
			// 	?>
			// 	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			// 	<?php
			endif;
			$templatebase_description = get_bloginfo( 'description', 'display' );
			if ( $templatebase_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $templatebase_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation ps-1 ms-1 col-md-7">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'templatebase' ); ?></button>
			<?php 
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			 ?>
			 <div>
		
			</nav>
		<div class="iconos col-md-2">	
		<i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i> 
	    <i class="fa-regular fa-bell ps-5" style="color: #ffffff;"></i>
       <img src="assets\img\Screenshot 2023-05-08 125017.png" class="ps-4">
        <i class="fa-solid fa-chevron-down ps-1"></i> 
		</div>
		</div>
	<!-- #site-navigation -->
	</header><!-- #masthead -->
