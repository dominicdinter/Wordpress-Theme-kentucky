<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kentucky
 */

get_header(); ?>
	</div></div>
	<div class="mainslider">
		<?php echo do_shortcode( '[kentuckyslider]' ); ?>
	</div>
	<div id="page" class="hfeed site container">
	<div id="content" class="site-content">
	<main id="main" class="site-main" role="main">

		<div class="jumbotron">
			<div class="container">
   				<h1>Hello, world!</h1>
   				<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    			<p><a class="btn btn-primary btn-lg">Learn more</a></p>
 			 </div>
		</div>
		

		
		<div class="row">
			<main role="main">
				<article class="col-md-9 col-sm-9">
					<?php if ( have_posts() ) : ?>
						

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php kentucky_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>
			</main>
		</article>

<!-- 		</main>
	</div> -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>