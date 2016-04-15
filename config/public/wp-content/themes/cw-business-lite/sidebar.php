<?php
/**
 *	The template for displaying Sidebar.
 *
 *	@package ThemeIsle
 */
?>
<div class="sidebar">
	<?php
		if ( is_active_sidebar( 'general_sidebar' ) ) {
			dynamic_sidebar( 'general_sidebar' );
		} else {
			
					?> <div class="footer-one-widget"> <?php the_widget ("WP_Widget_Calendar") ; ?> </div> <?php
					?> <div class="footer-one-widget"> <?php the_widget ("WP_Widget_Meta") ; ?> </div> <?php
					?> <div class="footer-one-widget"> <?php the_widget ("WP_Widget_Tag_Cloud") ; ?> </div> <?php
		}
	?>
</div><!--/.sidebar-->