<?php
/**
 * The "han participado" (former team members) widget area.
 *
 */
?>

<?php
	if (   ! is_active_sidebar( 'han-participado'  )
	)
		return;
?>

	<div class="">  
			<?php if ( is_active_sidebar( 'han-participado' ) ) : ?>
			<div class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'han-participado' ); ?>
			</div><!-- sumate hole .widget-area -->
            <?php endif; ?>        
	</div>   <!--/hole-->

</div><!-- #supplementary -->

