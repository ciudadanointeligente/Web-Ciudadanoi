<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="innerWrap bg_white">
		<section id="primary">
			
				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
				<span>	Media Report </span>
					</h1>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
                

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						
						get_template_part( 'content', 'media_report'); */
					?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h1 class="entry-title">
                                	<span> ( <?php echo(types_render_field("fecha", array("style" => 'text', "show_name" => 'false'))); ?> )</span>
									<a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a><br />
								</h1>


							</header><!-- .entry-header -->

						<div class="entry-content">
                                <span class="imagenReport"> <?php echo(types_render_field("imagen", array("width" => '150',"height" => '150'))); ?> </span>
                                
                                <div class="fichaMediaReport">
                                    
                                    <span class="itemsMediaReport"> <?php echo(types_render_field("nombre-del-medio", array("show_name" => 'true'))); ?> </span>
                                    
                                    <span class="itemsMediaReport"> <?php echo(types_render_field("tipo-de-medio", array("show_name" => 'true'))); ?> </span>
                                    
                                    <?php the_excerpt(); ?> 
                                     
                                    <span class="itemsMediaReport"> <?php echo(types_render_field("link", array("title" => 'ir a la publicación real'))); ?> </span>
                                    
                                </div>
                               
                                
                               
                                
         						
      					</div>
                        
                     </article>
                    

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						
						
						
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

	
</section><!-- #primary -->
</div>


<?php get_footer(); ?>