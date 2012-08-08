<?php
/**
 * The template for displaying content in the equipo archive template
 *
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <div class="ficha-team">      
		<!-- the thumbnail--->
        <div class="team-thumbnail">
		<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
        </div>
            
        <!-- /the thumbnail--->
        
		<!-- datos personales--->
        
        	
            <div class="ficha-team<?php echo(types_render_field("area-de-trabajo", array('show_name' => 'false'))); ?>">
            
            </div>
            
            
        	<div class="fci_fichaMiembro"> 
   				
                <div class="team-buttons">
                    <span class="bt_cv"><?php echo(types_render_field("linkedin", array('show_name' => 'false'))); ?> </span>
                     
                     
                    <span class="bt_twitter"><?php echo(types_render_field("twitterurl", array('show_name' => 'false'))); ?></span>
                     
                     <span class="bt_skype"><?php /*echo(types_render_field("skype", array('show_name' => 'false')));*/ ?></span>
              </div>
                
				<header >
            		<h3 class="archivePostTitle"><a href= <?php the_permalink(); ?> ><?php the_title(); ?></a></h3>
                </header>
                <?php echo(types_render_field("cargo", array('show_name' => 'false'))); ?>
             	 <hr>
                 
                 <div class="queHace"><?php echo(types_render_field("quehace", array('show_name' => 'false'))); ?></div>
                 
                 <div class="team-mail"><?php echo(types_render_field("usuariomail", array('show_name' => 'false'))); ?>
                 </div></a>
                 
		  </div>  <!--fci_fichaMiembro-->
         

			<?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php twentyeleven_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
    </div>

<!-- el texto del post -->
        
  
<!--/ el texto del post -->
        
	

	
</article><!-- #post-<?php the_ID(); ?> -->
