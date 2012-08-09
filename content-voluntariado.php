<?php
/**
 * The template for displaying content in the equipo archive template
 *
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        
        	<div class="infoPostIt"> 
				<header >
            		<h3 class="archivePostTitleVoluntariado"><a href= <?php the_permalink(); ?> ><?php the_title(); ?></a></h3>
                
                
                 
                 <!--<div class="areavoluntariado"><?php echo(types_render_field("area", array('show_name' => 'false'))); ?>
                 </div>-->
                 <hr>
             	
               <!-- <div class="email-contacto">Interesados contactarse a: <?php echo(types_render_field("email-contacto", array('show_name' => 'false'))); ?> 
                <hr> </div> </a> -->
                
                <!--<div class="fecha"> Desde: <?php echo(types_render_field("desde", array('show_name' => 'false'))); ?> </div> -->
             	     <div class="numerovol">Necesitamos
                  <span class="numerovol"> <?php echo(types_render_field("numero-vol", array('show_name' => 'false'))); ?></span> 	voluntarios <br /> para trabajar con nuestro equipo de <?php echo(types_render_field("proyecto-area", array('show_name' => 'false'))); ?> </div>
               
                <hr>
                 
                 <div class="fecha"> Inscríbete hasta el <?php echo(types_render_field("termino", array('show_name' => 'false'))); ?> </div>
             	 <hr>
                 
                
            
                <div class="verMas"> <a href= <?php the_permalink(); ?> >Ver +</a></div>
                 </header>
                
                 
                 
		  </div>

			<?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php twentyeleven_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
 

	
</article><!-- #post-<?php the_ID(); ?> -->
