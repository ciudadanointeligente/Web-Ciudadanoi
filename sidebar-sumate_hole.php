<?php
/**
 * The Súmate hole widget area
 *
 */
?>

<?php
	/* The sumate banner hole widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'sumate_hole'  )
		&& ! is_active_sidebar( 'sumate_sociales'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

	<div id="fci_bannerHole" class="theHole sumateHole fullWrap">  
			<?php if ( is_active_sidebar( 'sumate_hole' ) ) : ?>
			<div class="widget-area innerWrap" role="complementary">
				<?php dynamic_sidebar( 'sumate_hole' ); ?>
			</div><!-- sumate hole .widget-area -->
            <?php endif; ?>        
	</div>   <!--/hole-->
    
 			<?php if ( is_active_sidebar( 'sumate_sociales' ) ) : ?>
			<div id="sumateSociales" class="widget-area innerWrap" role="complementary">
				<?php dynamic_sidebar( 'sumate_sociales' ); ?>
			</div><!-- sumate_sociales .widget-area -->
            <?php endif; ?>   

</div><!-- #supplementary -->

