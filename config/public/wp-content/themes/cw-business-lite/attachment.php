<?php
/**
 *	The template for displaying Attachment.
 *
 *	@package ThemeIsle
 */
get_header();
?>
<div class="wrap">

	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>

				<article id="single">
					<h1><?php the_title(); ?></h1>
					<div class="single-entry"> 
						<?php the_post_thumbnail(); ?>
					</div><!--/.single-entry-->
				</article><!--/#single-->

				<?php }
		} else {
			echo '<p>'.__('No posts found.','cw-business-lite').'</p>';
		}
	?>

</div><!--/.wrap-->
<?php get_footer(); ?>