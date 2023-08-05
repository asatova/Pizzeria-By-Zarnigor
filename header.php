<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pizzeria
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pizzeria' ); ?></a>

	<header id="masthead" class="site-header">
        <!DOCTYPE html>
        <html style="font-size: 16px;" lang="en"><head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <meta name="keywords" content="​Made fresh to order, INTUITIVE">
            <meta name="description" content="">
            <title>Home</title>
            <link rel="stylesheet" href="/wp-content/themes/pizzeria/style-rtl.css" media="screen">
            <link rel="stylesheet" href="/wp-content/themes/pizzeria/nicepage.css" media="screen">
            <link rel="stylesheet" href="/wp-content/themes/pizzeria/Home.css" media="screen">
            <script class="u-script" type="text/javascript" src="/wp-content/themes/pizzeria/js/jquery.js" defer=""></script>
            <script class="u-script" type="text/javascript" src="/wp-content/themes/pizzeria/js/nicepage.js" defer=""></script>
            <meta name="generator" content="Nicepage 5.14.0, nicepage.com">
            <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">






            <script type="application/ld+json">{
                    "@context": "http://schema.org",
                    "@type": "Organization",
                    "name": "",
                    "logo": "images/default-logo.png/wp-content/themes/pizzeria/images/washing-mashines-appliance-store-2-1.png"
                }</script>
            <meta name="theme-color" content="#478ac9">
            <meta property="og:title" content="Home">
            <meta property="og:type" content="website">
            <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
</header>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$pizzeria_description = get_bloginfo( 'description', 'display' );
			if ( $pizzeria_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $pizzeria_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pizzeria' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
