<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
is_page()
<div class="<?php if(is_page('page-about')) {echo ''; } ?>">

	<div id="primary" class="site-content ">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				
			<div class='homepage-hero'>
				<?php the_content(); ?>
				
			</div>
		<?php endwhile; // end of the loop. ?>
				<div class="title"><?php the_title(); ?></div>
				<div class="content"><?php the_content(); ?></div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>