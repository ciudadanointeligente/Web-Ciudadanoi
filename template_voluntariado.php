<?php
/*
Template Name: Templatevoluntariado
*/

get_header(); ?>


          <div id="" role="main" class="innerWrap">
             
				<?php while ( have_posts() ) : the_post(); ?>
                
                
                
<!---contenido de quienes somos--->
          
           <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><span><?php the_title(); ?></span></h1>
                </header><!-- .entry-header -->
            
                <div class="entry-content">
    
					<?php the_content(); ?>
                    
                               
          						</div> 
                    
                    <!-- this is the structure required for initing the tabs -->
                        <div class="wp-tabs wpui-alma">
                        <!-- add class   wpui-tabs-vertical  to the above line for vertical tabs -->
                             
                            <!-- First tab's name -->
                            <h3 class="wp-tab-title">hoy Buscamos</h3>
                            <!-- First tab's contents -->
                            <div class="wp-tab-content">
                                
                                
                                
                                <div id="container">
                                               <?php  query_posts( array( 'post_type' => 'voluntariado', 'equipo' =>'equipo-ejecutivo', 'paged' => get_query_var('page'), 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'DESC' ) ); ?>
                                   
										<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                            
                                              
                                             
                                                   <div class="item"><?php get_template_part( 'content', 'voluntariado' );	?> </div>
                                                
                                            
                                                  
                                         <?php endwhile; else: ?>
                                        <?php endif; ?>
                                
                               	 <?php wp_reset_query();  ?> </div> 
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                         
                          
                             <h3 class="wp-tab-title">inscríbete</h3>
                             	<div class="wp-tab-content">
                                 <ul class="displayvoluntariados"> 
                                 <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dDQtb3RtMGZGcnl1LVowT1ZoeUhVSlE6MQ" width="760" height="1409" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                                 </ul>   
                        		</div>
                         	
                              <h3 class="wp-tab-title">Formar una alianza</h3>
                              <div class="wp-tab-content">
                                <ul class="displayvoluntariados">
                               <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dDF6dlNDcG5QVkliMXVKT1NIZzU2YlE6MQ" width="760" height="1082" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                                 </ul> 
                                  
                                  
                               </div>
                              
                             
                                
                    </div>
                    
                    
                    </div><!-- .entry-content -->
                 </article><!-- #post-<?php the_ID(); ?> -->
                   
                   </div> 
       
                                             
                                  
       
       
  <div>
  	             <?php get_sidebar( 'sumate_hole' ); ?>
  
   
                
                <div class="innerWrap marT2em" ><?php echo(types_render_field("secondary_content", array('show_name' => 'false'))); ?> </div>
                
				<?php endwhile; // end of the loop. ?>
      

<?php get_footer(); ?> </div>

</div>