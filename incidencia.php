<?php
/*
Template Name: incidencia
*/

get_header(); ?>


	
<?php 	
			wp_nav_menu(
				array(
					'menu_class' => 'hacemos_menu_nav', 
					'container_class' => 'hacemos-menu-container innerWrap', 
					'menu_id'=> 'hacemos_nav', 
					'theme_location' => 'hacemos-menu', 'fallback_cb' => 
					'_do_use_menu',
					'walker' => new My_Walker						
				)
			);
		
		?>
      <!--end nav-->

              
			<div id="" role="main" class="innerWrap">
             
				<?php while ( have_posts() ) : the_post(); ?>
                
                
                
<!---contenido de incidencia--->
          
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><span><?php the_title(); ?></span></h1>
                </header><!-- .entry-header -->
            
                <div class="entry-content">
    
					<?php the_content(); ?>
						
	
                    <h2> Proyectos / Projects </h2>
                    
                    <!---query  proyectos del área-->
						<?php query_posts( array( 'post_type' => 'fci_proyecto', 'area_proyecto'=>'proyectos_incidencia', 'paged' => get_query_var('page') ) ); ?>
                        
                        
                 
                    <!--/-->
 				
                
                
                			<?php get_template_part( 'content', 'proyectoenlista' ); ?>
                          <!--template part proyectoenlista-->
   
							<?php wp_reset_query();
                            
                            ?>
                    <!---/query  proyectos del área-->
                    
                                  <?php echo(types_render_field("secondary_content", array('show_name' => 'false'))); ?> 
                    
                    </div><!-- .entry-content -->
                    <footer class="entry-meta">
                    </footer>

                </article><!-- #post-<?php the_ID(); ?> -->

                        
 <!--/contenido de incidencia/-->


      
                         				
				<?php endwhile; // end of the loop. ?>
                

                

			</div><!-- #content -->
         
	

<?php get_footer(); ?>
