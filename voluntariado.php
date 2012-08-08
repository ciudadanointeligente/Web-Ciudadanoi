<?php
/*
Template Name: sumate
*/

get_header(); ?>

      <!--end nav-->

              
			             
				<?php while ( have_posts() ) : the_post(); ?>
                	<div id="" role="main" class="innerWrap">

						<?php get_template_part( 'content', 'page' ); ?>
                    
                  	</div><!-- #content -->
                    
                     
                 
             		<?php get_sidebar( 'sumate_hole' ); ?>
  
   
                
                <div class="innerWrap marT2em" ><?php echo(types_render_field("secondary_content", array('show_name' => 'false'))); ?> </div>
                
				<?php endwhile; // end of the loop. ?>
      

<?php get_footer(); ?>


casita