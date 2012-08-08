<?php
/**
 * The home info board widget area
 *
 */
?>

<?php
	/* The infoboard widget area is triggered if it 
	 * has widgets. So let's check that first.
	 *
	 * If it does not widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'infoboard'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="fci_infoBoard" class="innerWrap">
	<?php if ( is_active_sidebar( 'infoboard' ) ) : ?>
	<div class="widget-area infoboard" role="complementary">
		<?php dynamic_sidebar( 'infoboard' ); ?>
        <div class="infoboardBottom"></div>
	</div><!-- #first .widget-area -->
    
	<?php endif; ?>

</div><!-- #infoboard -->