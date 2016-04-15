<?php
/**
 *	The template for displaying Footer.
 *
 *	@package ThemeIsle
 */
?>
<footer>
	<div class="footer-one cf">
		<div class="footer-one-container cf">
			<?php
				if ( is_active_sidebar( 'footer_sidebar' ) ) {
					dynamic_sidebar( 'footer_sidebar' );
				} else {
					?> <div class="footer-one-widget"> <?php the_widget ("WP_Widget_Calendar") ; ?> </div> <?php
					?> <div class="footer-one-widget"> <?php the_widget ("WP_Widget_Meta") ; ?> </div> <?php
					?> <div class="footer-one-widget"> <?php the_widget ("WP_Widget_Tag_Cloud") ; ?> </div> <?php
				}
			?>
		</div><!--/.footer-one-container .cf-->
	</div><!--/.footer-one .cf-->
	<div class="footer-two cf">
		<div class="wrap">
			<p>
				<?php _e('Copyright','cw-business-lite'); ?> &copy; <a href="https://themeisle.com/themes/cw-business-lite/" title="Movatique" target="_blank" rel="nofollow">Movatique</a> <?php _e('is proudly powered by','cw-business-lite'); ?> <a href="http://wordpress.org/" title="WordPress" target="_blank" rel="nofollow">WordPress</a>. <?php _e('All rights reserved.','cw-business-lite'); ?>
			</p>
		</div><!--/.wrap-->
	</div><!--/.footer-two-->
</footer><!--/footer-->

	<?php wp_footer(); ?>
	</body>
</html>