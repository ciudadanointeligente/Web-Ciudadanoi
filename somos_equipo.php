<?php
/*
Template Name: Equipo
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
                    
                    <!-- this is the structure required for initing the tabs -->
                        <div class="wp-tabs wpui-alma">
                        <!-- add class   wpui-tabs-vertical  to the above line for vertical tabs -->
                             
                            <!-- First tab's name -->
                            <h3 class="wp-tab-title">El equipo</h3>
                            <!-- First tab's contents -->
                            <div class="wp-tab-content">
                                 <!---query  integrantes ejecutivo-->
                                 <ul class="displayEquipo"> 
                                    <?php  query_posts( array( 'post_type' => 'equipo', 'fci_organismo'=>'equipo-ejecutivo', 'paged' => get_query_var('page'), 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'DESC' ) ); ?>
                                   
										<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                            
                                           
                                                <li>
                                                     <?php get_template_part( 'content', 'equipo' );	?>
                                                </li>
                                            
                                                  
                                         <?php endwhile; else: ?>
                                        <?php endif; ?>
                                
                               	 <?php wp_reset_query();  ?>
                                 </ul>   
                    
                    			<!---/query integrantes-->
                            </div><!-- end first tab -->
                         
                              <!-- Like so, Second tab -->
                              <!--<h3 class="wp-tab-title">El directorio</h3>
                              <div class="wp-tab-content">
                                   <ul class="displayEquipo"> 
                                    <?php// query_posts( array( 'post_type' => 'equipo', 'fci_organismo'=>'directorio', 'paged' => get_query_var('page') ) ); ?>
                                   
                                <?php// if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    
                                   
                                        <li>
                                             <?php// get_template_part( 'content', 'equipo' );	?>
                                        </li>
                                    
                                          
                                 <?php// endwhile; else: ?>
                                <?php// endif; ?>
                                
                                <?php// wp_reset_query();  ?>
                                 </ul>   
                               </div>--!>
                         
                         	<!-- Like so, Third tab -->
                              <h3 class="wp-tab-title">Han participado...</h3>
                              <div class="wp-tab-content">
                                   <ul class="displayEquipo"> 
                                    <?php  query_posts( array( 'post_type' => 'equipo', 'fci_organismo'=>'ex-integrante', 'paged' => get_query_var('page') ) ); ?>
                                   
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    
                                   
                                        <li>
                                             <?php get_template_part( 'content', 'equipo' );	?>
                                        </li>
                                    
                                          
                                 	<?php endwhile; else: ?>
                                <?php endif; ?>
                                
                                <?php wp_reset_query();  ?>
                                 </ul>   
                                 <?php get_sidebar( 'han-participado' ); ?>
                               </div>
                         
                        </div><!-- end div.wp-tabs -->
                    
                    
                             
                    
                    </div><!-- .entry-content -->
                    <footer class="entry-meta">
                    	<div class="somos_menu_container">
                    	 <?php 	
								wp_nav_menu(
									array(
										'menu_class' => 'somos_menu',
										'menu_id'=> '', 
										'theme_location' => 'somos-menu', 'fallback_cb' => 
										'_do_use_menu',
										'walker' => new My_Walker						
									)
								);
							
							?>
                         </div>
                    </footer>

                </article><!-- #post-<?php the_ID(); ?> -->

                        
 <!--/contenido de incidencia/-->


      
                         				
				<?php endwhile; // end of the loop. ?>
                

                

			</div><!-- #content -->
         
	

<?php get_footer(); ?>
