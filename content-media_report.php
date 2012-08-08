<?php
/**
 * The template for displaying content in the single.php template
 * ciudadanoi
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div><span class="imagenReport"> <?php echo(types_render_field("imagen", array("width" => '150',"height" => '150'))); ?> </span>
        
        <div class="fichaMediaReport">
       
        <span class="itemsMediaReport"> <?php echo(types_render_field("fecha", array("style" => 'text', "show_name" => ‘true’))); ?> </span>
        
        
        <span class="itemsMediaReport"> <?php echo(types_render_field("nombre-del-medio", array("show_name" => 'true'))); ?> </span>
        
        <span class="itemsMediaReport"> <?php echo(types_render_field("tipo-de-medio", array("show_name" => 'true'))); ?> </span>
       
        
        <?php the_excerpt(); ?> 
        
         <span class="itemsMediaReport"> <?php echo(types_render_field("link", array("title" => 'ir a la publicación real'))); ?> </span>
        
        </div>
        
        
        
        </div>
		<div class="textoMediaReport"><?php the_content(); ?> </div>
        
        
        
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was tagged %2$s.', 'twentyeleven' );
			} else {
				
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
		?>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		
		</div><!-- #entry-author-info -->
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
