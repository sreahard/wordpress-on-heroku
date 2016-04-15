<?php
/**
 *	The template for displaying Front Page.
 *
 *	@package ThemeIsle
 */
get_header();


if ( get_option( 'show_on_front' ) == 'page' ): ?>
  			<section id="features-two">
				<div class="wrap">
					<h3>
						<?php the_title(); ?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
			<div class="wrap cf">
				<div class="content-left">
					<div class="front-page-article">
						<?php
							if ( have_posts() ) : 
							
								while ( have_posts() ) : the_post();
							
									the_content(); 
								
								endwhile; 

							endif; 
						?>
					
					</div>
				</div>	
				<?php get_sidebar(); ?>
			</div><!--/div .wrapper-->
		
<?php		
else:

get_template_part( 'includes/subheader' ); ?>
<section id="features-two">
	<div class="wrap">
		<?php
			if ( get_theme_mod( 'cw_business_lite_frontpage_subheader_title',__('Why Choose Us?','cw-business-lite') ) ) {
				echo '<h3>';
					echo get_theme_mod( 'cw_business_lite_frontpage_subheader_title',__('Why Choose Us?','cw-business-lite') );
				echo '</h3>';	
			}
		?>
		<div class="features-two-container">
			<div class="features-box">
				<?php
				$cw_business_lite_frontpage_firstlybox_link = get_theme_mod('cw_business_lite_frontpage_firstlybox_link');
				
				if( !empty($cw_business_lite_frontpage_firstlybox_link) ):
					echo '<a href="'.$cw_business_lite_frontpage_firstlybox_link.'">';
				endif;	
				
				if ( get_theme_mod( 'cw_business_lite_frontpage_firstlybox_image' ) ) {
					echo '<div class="features-box-image"><img src="'. esc_url(get_theme_mod( 'cw_business_lite_frontpage_firstlybox_image' )) .'" alt="'. get_theme_mod( 'cw_business_lite_frontpage_firstlybox_title','Fast &amp; Safe' ) .'" title="'. get_theme_mod( 'cw_business_lite_frontpage_firstlybox_title',__('Fast &amp; Safe','cw-business-lite') ) .'" /></div>';
				} else {
					echo '<div class="features-box-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="90" viewBox="0 0 32 32"><path d="M30 0l-14 4-14-4c0 0-0.141 1.616 0 4l14 4.378 14-4.378c0.141-2.384 0-4 0-4zM2.256 6.097c0.75 7.834 3.547 21.007 13.744 25.903 10.197-4.896 12.995-18.069 13.744-25.903l-13.744 5.167-13.744-5.167z" /></svg></div>';
				}
				
				if ( get_theme_mod( 'cw_business_lite_frontpage_firstlybox_title',__('Fast &amp; Safe','cw-business-lite') ) ) {
					echo '<h4>';
						echo get_theme_mod( 'cw_business_lite_frontpage_firstlybox_title',__('Fast &amp; Safe','cw-business-lite') );
					echo '</h4>';
				} 
				if( !empty($cw_business_lite_frontpage_firstlybox_link) ):
					echo '</a>';
				endif;	
				?>
				
			</div><!--/.features-box-->
			<div class="features-box">
				<?php
				$cw_business_lite_frontpage_secondlybox_link = get_theme_mod('cw_business_lite_frontpage_secondlybox_link');
				
				if( !empty($cw_business_lite_frontpage_secondlybox_link) ):
					echo '<a href="'.$cw_business_lite_frontpage_secondlybox_link.'">';
				endif;
				
				if ( get_theme_mod( 'cw_business_lite_frontpage_secondlybox_image' ) ) {
					echo '<div class="features-box-image"><img src="'. esc_url(get_theme_mod( 'cw_business_lite_frontpage_secondlybox_image' )) .'" alt="'. get_theme_mod( 'cw_business_lite_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') ) .'" title="'. get_theme_mod( 'cw_business_lite_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') ) .'" /></div>';
				} else {
					echo '<div class="features-box-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="90" viewBox="0 0 32 32"><path d="M16 2c8.837 0 16 5.82 16 13 0 7.18-7.163 13-16 13-0.849 0-1.682-0.054-2.495-0.158-3.437 3.437-7.539 4.053-11.505 4.144v-0.841c2.142-1.049 4-2.961 4-5.145 0-0.305-0.024-0.604-0.068-0.897-3.619-2.383-5.932-6.024-5.932-10.103 0-7.18 7.163-13 16-13z" /></svg></div>';
				}
				
				if ( get_theme_mod( 'cw_business_lite_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') ) ) {
					echo '<h4>';
						echo get_theme_mod( 'cw_business_lite_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') );
					echo '</h4>';	
				}
				
				if( !empty($cw_business_lite_frontpage_secondlybox_link) ):
					echo '</a>';
				endif;
				?>
				
			</div><!--/.features-box-->
			<div class="features-box">
				<?php
				$cw_business_lite_frontpage_thirdlybox_link = get_theme_mod('cw_business_lite_frontpage_thirdlybox_link');
				
				if( !empty($cw_business_lite_frontpage_thirdlybox_link) ):
					echo '<a href="'.$cw_business_lite_frontpage_thirdlybox_link.'">';
				endif;
				
				if ( get_theme_mod( 'cw_business_lite_frontpage_thirdlybox_image' ) ) {
					echo '<div class="features-box-image"><img src="'. esc_url(get_theme_mod( 'cw_business_lite_frontpage_thirdlybox_image' )) .'" alt="'. get_theme_mod( 'cw_business_lite_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') ) .'" title="'. get_theme_mod( 'cw_business_lite_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') ) .'" /></div>';
				} else {
					echo '<div class="features-box-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="90" viewBox="0 0 32 32"><path d="M13.272 27.2c-0.696 0-1.355-0.325-1.778-0.885l-5.718-7.549c-0.744-0.982-0.55-2.381 0.432-3.125 0.984-0.746 2.381-0.55 3.125 0.432l3.762 4.966 9.459-15.186c0.651-1.045 2.027-1.365 3.074-0.714 1.045 0.65 1.365 2.027 0.712 3.072l-11.173 17.936c-0.389 0.626-1.059 1.018-1.794 1.050-0.034 0.002-0.067 0.002-0.101 0.002z" /></svg></div>';
				}
				?>
				<h4>
					<?php
					if ( get_theme_mod( 'cw_business_lite_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') ) ) {
						echo get_theme_mod( 'cw_business_lite_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') );
					}
					?>
				</h4>
				
				<?php
				if( !empty($cw_business_lite_frontpage_thirdlybox_link) ):
					echo '</a>';
				endif;
				?>
			</div><!--/.features-box-->
		</div><!--/.features-two-container-->
	</div><!--/.wrap-->
</section><!--/#features-two-->
<div class="wrap">
	<article id="content-article">
		<?php
			$cw_business_lite_frontpage_thecontent_image = get_theme_mod('cw_business_lite_frontpage_thecontent_image', get_template_directory_uri().'/images/index-article-image.png');
			if( !empty($cw_business_lite_frontpage_thecontent_image) ):
				echo '<div class="content-article-image">';
					echo '<img src="'.esc_url($cw_business_lite_frontpage_thecontent_image).'" alt="Index Article Image" title="Index Article Image" />';
				echo '</div>';
			endif;
		?>
		
		<h2>
			<?php
			if ( get_theme_mod( 'cw_business_lite_frontpage_thecontent_title',__('Lorem ipsum dolor sit amet et consectetuer adipiscing','cw-business-lite') ) ) {
				echo get_theme_mod( 'cw_business_lite_frontpage_thecontent_title',__('Lorem ipsum dolor sit amet et consectetuer adipiscing','cw-business-lite') );
			}
			?>
		</h2>
		<p>
			<?php
			if ( get_theme_mod( 'cw_business_lite_frontpage_thecontent_content',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','cw-business-lite') ) ) {
				echo get_theme_mod( 'cw_business_lite_frontpage_thecontent_content',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','cw-business-lite') );
			}
			?>
		</p>
	</article><!--/#content-article-->
</div><!--/.wrap-->
<div class="clearfix"></div>
<div class="wrap">

	<section class="content">
		<div class="title-border">
			<h3>
				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_ourclients_title',__('Our Clients','cw-business-lite') ) ) {
					echo get_theme_mod( 'cw_business_lite_frontpage_ourclients_title',__('Our Clients','cw-business-lite') );
				}
				?>
			</h3>
		</div><!--/.title-border-->
		<div class="our-clients">
				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo1',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo1',get_template_directory_uri().'/images/logo_default.png' )); ?>" alt="Sponsor 1" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo2',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo2',get_template_directory_uri().'/images/logo_default.png' )); ?>" alt="Sponsor 2" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo3',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo3',get_template_directory_uri().'/images/logo_default.png' )); ?>" alt="Sponsor 3" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo4',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo4',get_template_directory_uri().'/images/logo_default.png' )); ?>" alt="Sponsor 4" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo5',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo5',get_template_directory_uri().'/images/logo_default.png' )); ?>" alt="Sponsor 5" />
				<?php }
				?>

<!-- 				<?php
				if ( get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo6',get_template_directory_uri().'http://lorempixel.com/250/250/people/6' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'cw_business_lite_frontpage_ourclients_logo6',get_template_directory_uri().'/images/logo_default.png' )); ?>" alt="Sponsor 6" />
				<?php }
				?> -->

		</div><!--/.our-clients-->
	</section><!--/.content-->
</div><!--/.wrap-->

<?php endif; ?>
<?php get_footer(); ?>