<?php
/**
 * The Template for displaying single FCI staff members.
 *
 */

get_header(); ?>

		<div id="primary">
			<div id="wrapperCV" role="main" class="innerWrap">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'equipo' ); ?>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>