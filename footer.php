<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
			<div class="fci-footeraddress">
			<div class="fci-address"><span>+56 2 4192770 | Holanda 895, Providencia, Santiago</span><span class="bt_twitter"><a href="http://twitter.com/#!/ciudadanoi"></a></span><span class="bt_facebook"><a href="http://www.facebook.com/ciudadanointeligente"></a></span></div>
            </div>

			<div id="site-generator">
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>