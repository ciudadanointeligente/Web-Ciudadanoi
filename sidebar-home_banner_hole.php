<?php
/**
 * The home banner hole widget area
 *
 */
?>

<?php
	/* The home banner hole widget area is triggered if it 
	 * has widgets. So let's check that first.
	 *
	 * If it does not widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'home_banner_hole'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div class="innerWrap">
	<?php if ( is_active_sidebar( 'home_banner_hole' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'home_banner_hole' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

</div><!-- #innerWrap -->