<?php
/*
 * Template Name: Somos
 *
 */

get_header(); ?>


		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>
                    
                    <div class="somos_menu_container innerWrap">
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
                    

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
                 
				 
				 

			</div><!-- #content -->
           
		</div><!-- #primary -->

<?php get_footer(); ?>