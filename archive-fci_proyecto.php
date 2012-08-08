<?php
/**
 * The template for displaying fci_proyectos Archive.
 *
 */

get_header(); ?>

<div class="innerWrap bg_white">
		<section id="primary">
			<div id="content" role="main">

				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<span>Proyectos / Projects</span>
					</h1>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>
					
                <ul class="fci_projectsList">
						<?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        
            				<li>
             
                            <div class="fci_fichaProyecto">
                        
                       			 <a href="<?php the_permalink() ?>" rel="bookmark"><div class="fci-projectThumbnail"><?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } ?></div></a>
                    
                                   <div class="fci_proyectoData">     
                                        <a href="<?php the_permalink() ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>
                                        
                                        <div class="fci_proyectoUrl"><br />
                                            <?php echo(types_render_field("url-del-proyecto", array('show_name' => 'false'))); ?>
                                            <br />
                                            <hr>
                                        </div>
                     
                                        <a href="<?php the_permalink() ?>" >Ver detalles.</a>
                                
                                </div>  
                           </div>
                             
        				</li>
                        <?php endwhile; ?>
                    </ul>    

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

			</div><!-- #content -->
</section><!-- #primary -->
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>