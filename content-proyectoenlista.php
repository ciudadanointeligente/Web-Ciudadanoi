<?php
/**
 * The template for displaying a list of fci_projects
 *
 */
?>
<ul class="fci_projectsList">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <li>
           <div class="fci_fichaProyecto">
                
                <a href="<?php the_permalink() ?>" rel="bookmark"><div class="fci-projectThumbnail"><?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?></div></a>
            
                   <div class="fci_proyectoData">     
                        <a href="<?php the_permalink() ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>
                        
                        <div class="fci_proyectoUrl"><br />
							<?php echo(types_render_field("url-del-proyecto", array('show_name' => 'false'))); ?>
                            <br />
                            <hr>
                        </div>
                        
                       
                        <div class="descP-incidencia">
                            <?php echo(types_render_field("p-incidencia", array('show_name' => 'false'))); ?>
                        </div>
                        <div class="descP-redes">
                            <?php echo(types_render_field("p-redes", array('show_name' => 'false'))); ?>
                            <br />
                        </div>
                        <div class="descTecnica">
                            <?php echo(types_render_field("tecnica", array('show_name' => 'false'))); ?>
                            <br />
                        </div>
                            
                        <a href="<?php the_permalink() ?>" >Ver detalles.</a>
                
            </div>  
         </li>
        <hr>                            
    <?php endwhile; else: ?>
    <?php endif; ?>
</ul>