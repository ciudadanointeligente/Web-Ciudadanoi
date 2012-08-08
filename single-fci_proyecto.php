<?php
/**
 * The Template for displaying single FCI projects.
 *
 */

get_header(); ?>

		<div id="primary">
			<div id="wrapperProyecto" role="main" class="innerWrap">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'fci_proyecto' ); ?>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>