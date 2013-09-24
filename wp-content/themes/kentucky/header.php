<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Kentucky
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="site-branding navbar-brand">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div> -->

		<nav id="site-navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    	<span class="sr-only">Toggle navigation</span>
			    	<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			   		<span class="icon-bar"></span>
			  	</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</div>
			
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<div class="row">
						<?php

							$args = array(
								'theme_location' => 'top-bar',
								'depth'		 => 0,
								'container'	 => false,
								'menu_class'	 => 'nav navbar-nav',
								'walker'	 => new BootstrapNavMenuWalker()
							);

							wp_nav_menu($args);

						?>
					<div class="search-top col-lg-4 col-md-4 col-sm-4 pull-right">
						<div class="row">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>

<!-- 						<div class="col-lg-4 pull-right">
    <div class="input-group">
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
  </div>
				</div>
			</div> -->

		
			<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> -->
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
