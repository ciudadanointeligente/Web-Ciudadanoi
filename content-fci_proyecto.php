<?php
/**
 * The template for displaying content fci_proyecto.php template
 *
 */
?>

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
				
				<?php echo(types_render_field("elevator-name", array('show_name' => 'false', 'output' => 'html' ))); ?>
                
                <?php echo(types_render_field("url-del-proyecto", array('show_name' => 'false', 'output' => 'html' ))); ?>
                
                <?php echo(types_render_field("status-fci-proyecto", array('show_name' => 'true', 'output' => 'html' ))); ?>
                
                <?php echo(types_render_field("fci-proyecto-tagline", array('show_name' => 'false', 'output' => 'html' ))); ?>
                
                
                
                
               <span>Encargado del proyecto:</span> <a href="<?php echo(types_render_field("link-encargado", array('show_name' => 'false'))); ?>"> <?php echo(types_render_field("p-encargado", array('show_name' => 'false'))); ?></a> 
               
                
         </section>  
     </div>
    	
         <section>
         	<div class="aboutProject">
         		<?php echo(types_render_field("fci-proyecto-about", array('show_name' => 'true', 'output' => 'html' ))); ?>
                
            </div>
            <div class="">
            
            
            
            
            			<div class="wp-accordion wpui-alma">
                             
                            <!-- First tab's panel -->
                            <?php
								$contenidoI = types_render_field("p-incidencia");
								if ($contenidoI) { ?>
                                 <h3 class="wp-tab-title">perspectiva de incidencia</h3>
                           
                                <!-- First tab's contents -->
                                <div class="wp-tab-content">
                                     <?php echo(types_render_field("p-incidencia", array('show_name' => 'false', 'output'=>'html'))); ?>
                                </div><!-- end first tab -->
                             <?php } ?>   
                             
                             <?php
								$contenidoR = types_render_field("p-redes");
								if ($contenidoR) { ?>
                                 <h3 class="wp-tab-title">Perspectiva de redes y comunidad</h3>
                           
                                <!-- First tab's contents -->
                                <div class="wp-tab-content">
                                     <?php echo(types_render_field("p-redes", array('show_name' => 'false', 'output'=>'html'))); ?>
                                </div><!-- end first tab -->
                             <?php } ?>   
                             
                             
                             <?php
								$contenidoT = types_render_field("tecnica");
								if ($contenidoT) { ?>
                                 <h3 class="wp-tab-title">perspectiva técnica</h3>
                           
                                <!-- First tab's contents -->
                                <div class="wp-tab-content">
                                     <?php echo(types_render_field("tecnica", array('show_name' => 'false', 'output'=>'html'))); ?>
                                </div><!-- end first tab -->
                             <?php } ?>   
                         
                        </div><!-- end class wp-accordion -->
      
                </div>    
                
          </section>
          
          <section>
          
				<?php echo(types_render_field("desde", array('show_name' => 'true', 'output' => 'html' ))); ?>
                
                <?php echo(types_render_field("last-update", array('show_name' => 'true', 'output' => 'html' ))); ?>
                
          </section>
          
		
        
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
