<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'adidas' ); ?></a>

	<header id="masthead" class="site-header" style=" background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/pattern-bg.png');background-color: #10372B;">

		<div class="container pt-2 pb-2">

			<div class="row align-items-center">
	
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start" >
					<?php the_custom_logo(); ?>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" style="margin-left:145px;background-color:transparent;border-color:transparent" >
						<img src="http://adidas-theme.local/wp-content/uploads/2024/01/burger-icon.png"/>
						<?php esc_html_e( '', 'adidas' );?>
					</button>
				</div>

				<div class="col-sm-12 col-md-5">
					<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
				</div>

				<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center"  >
				 <?php
                 if (has_nav_menu('secondary-menu')) {
                  wp_nav_menu(array('theme_location' => 'secondary-menu', 'menu_class' => 'horizontal-menu'));
                  }
                  ?>
				</div>

			</div>
		</div>
		<nav id="site-navigation" class="main-navigation" style=" background-color: #155938;
    background-image: url('http://adidas-theme.local/wp-content/uploads/2024/01/pattern-bg.png');">
			<div class="container d-flex justify-content-center">

			<div class="row">
				

				<div class="col-12 text-center" style="display:flex;">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu'
							)
						);
					   
					?>
					<!-- Add a search bar -->
					<div class="header-widget-area" >
                    <?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
                     <?php dynamic_sidebar( 'header-widget-area' ); ?>
                   <?php endif; ?>
                     </div>
				</div>

				</div>
			</div>

		</nav>
		<script>
    // jQuery for the toggle functionality
    jQuery(document).ready(function($) {
        $('.menu-toggle').on('click', function() {
            $('#primary-menu').slideToggle();
            $('.header-widget-area').slideToggle(); 
        });
    });
</script>

	</header><!-- #masthead -->
	