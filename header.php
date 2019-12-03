<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package landscape
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
<header>
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <img src="img/logo.png" alt="" >
                <div class="logo_title">
                    THE<span>GEM</span>
                </div>
            </div>
            
            <label for="toggle-1" class="toggle-menu">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </label>
            <input type="checkbox" id="toggle-1">

            <nav>
               <ul>
                     <li><a href="#">home</a></li>
                     <li><a href="#">pages</a></li>
                     <li><a href="#">blog</a></li>
                     <li><a href="#">portfolios</a></li>
                     <li><a href="#">shop</a></li>
                     <li><a href="#">features</a></li>
                     <li><a href="#">elements</a></li>
                     <li><a href="#"><img src="img/flag.png" alt=""></a></li>
                     <li><a href="#"><img src="img/seek.png" alt=""></a></li>
                     <li><a href="#"><img src="img/bag.png"  alt=""></a></li>
                     <li><a href="#"><img src="img/_2.png"   alt=""></a></li>
              </ul>
            </nav>
        </div>  
        <h1>CONNECT BETTER.<br>
            FASTER.<br>
            SECURER.
        </h1>
    </div>
    <div class="arrow_wrap">
            <div><img src="img/arrow_left.png"></div>
            <div><img src="img/arrow_right.png"></div>
    </div>
    <div class="the_world p__ container">
            the world's leading cross-platform <br>
            secure messaging system
            <p><button class="button1 button">get started</button>
            </p>
            <div style="border-top: solid transparent"></div>
    </div>
</header>



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'landscape' ); ?></a>

	<header id="masthead" class="site-header">
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
			$landscape_description = get_bloginfo( 'description', 'display' );
			if ( $landscape_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $landscape_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'landscape' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
