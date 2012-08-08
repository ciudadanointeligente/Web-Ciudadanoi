<?php
/*
Template Name: fci_homepage
*/

get_header(); ?>

			
	<?php get_template_part( 'panel' ); ?>
    		

		<div id="content" role="main" class="innerWrap">
        		<div class="homeQuote"> Usamos tecnología para transparentar y participar en democracia, trabajamos para trasladar poder desde los pocos hacia los muchos. </div>
                
				<?php if ( have_posts() ) : ?>
                 
                    <?php while ( have_posts() ) : the_post(); ?>
    
                            <article id="post-<?php the_ID(); ?>">
                   
                        
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-<?php the_ID(); ?> -->
    
					
				<?php endwhile; // end of the loop. ?>
                
               	<?php else : ?>
                
                <?php endif;?> 
                
			</div><!-- #content -->
        
       		 <div id="fci_bannerHole" class="theHole fullWrap">  
             	<?php get_sidebar( 'home_banner_hole' ); ?>
  
    			</div>  
                
             <?php get_sidebar( 'infoboard' ); ?>
            
               <?php if (function_exists('simple_feed_list')) : ?>
            	<div id="fullWrap" >
            		<div id="holeVaso" class="innerWrap">
                        <h2>El Vaso</h2>
                        <ul><?php simple_feed_list('http://www.elvaso.cl/category/ciudadano-inteligente/feed/','limit=3'); ?></ul>
                 	</div>
            	</div>
			<?php endif; ?>
                
	

<?php get_footer(); ?>