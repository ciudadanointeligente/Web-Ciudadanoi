<?php
/**
 * The Template for displaying apps amigas.
 *
 */

get_header(); ?>

		<div id="primary">
			<div id="wrapperProyecto" role="main" class="innerWrap">

				<?php while ( have_posts() ) : the_post(); ?>

					<!----->
                    
                    
                                            
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><span><?php the_title(); ?></span></h1>
                                
                            </header><!-- .entry-header -->
                            <div class="entry-content"> 
                            <div class="wrapper_headerProyecto">
                                <div class="fci-projectImg"><?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    } ?></div>
                                 
                                <section class="fci_resumenProyecto">
                                        <?php echo(types_render_field("logo-del-proyecto", array('show_name' => 'false', 'output' => 'html' ))); ?>
         
                                        <?php echo(types_render_field("url-del-proyecto", array('show_name' => 'false', 'output' => 'html' ))); ?>

                                       <span>Encargado del proyecto:</span> <?php echo(types_render_field("encargado-app", array('show_name' => 'false'))); ?>
                                       <br />
                                       
                                       <?php echo(types_render_field(" contacto-encargado-app", array('show_name' => 'true', 'output' => 'html' ))); ?>
                                      
                                       
                                        
                                 </section>  
                             </div>
                             
                                <?php if ( 'post' == get_post_type() ) : ?>
                                <div class="entry-meta">
                                    <?php twentyeleven_posted_on(); ?>
                                </div><!-- .entry-meta -->
                                <?php endif; ?>
                            
                        
                            
                                <?php the_content(); ?>
                                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
                            </div><!-- .entry-content -->
                        
                            <footer class="entry-meta">
                                <?php
                                    /* translators: used between list items, there is a space after the comma 
                                    $categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
                        
                                    /* translators: used between list items, there is a space after the comma
                                    $tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
                                    if ( '' != $tag_list ) {
                                        $utility_text = __( 'Ver los demás proyectos de %1$s', 'twentyeleven' );
                                    } elseif ( '' != $categories_list ) {
                                        $utility_text = __( 'Ver los demás proyectos de %1$s', 'twentyeleven' );
                                    } else {
                                        $utility_text = __( '' );
                                    }
                        
                                    printf(
                                        $utility_text,
                                        $categories_list,
                                        $tag_list,
                                        esc_url( get_permalink() ),
                                        the_title_attribute( 'echo=0' ),
                                        get_the_author(),
                                        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
                                    );
                                */?>
                        
                            
                            </footer><!-- .entry-meta -->
                        </article><!-- #post-<?php the_ID(); ?> -->

                    
                    
                    
					<!----->

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>