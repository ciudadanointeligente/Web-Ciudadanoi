<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
				</header>

				<div class="entry-content">
					<div class="imgError">
                        <p>Por favor <a href="mailto:info@ciudadanointeligente.cl">avísanos</a> para que solucionemos el problema.</p>
                        <div class="ups">UPS! LO QUE BUSCAS YA NO ESTA AQUÍ</div>
                    </div>
                    <div class="buscadorError"><p>Puedes volver al <a href="http://www.ciudadanointeligente.org/">home</a> o buscar dentro del contenido:</p><?php get_search_form(); ?></div>
					

					<?php /* the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

				  <div class="widget">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'twentyeleven' ); ?></h2>
						<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						</ul>
					</div>

					<?php
					/* translators: %1$s: smilie
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'twentyeleven' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); */?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>