<div class="partners">
	<?php if(have_posts()) : the_post(); ?>
		<h2><?php the_field('header', 'option'); ?></h2>
	<div class="wrap row logos">
			<?php if( have_rows('trusted_by_repeater', 'option') ): ?>
				<?php while ( have_rows('trusted_by_repeater', 'option') ) : the_row(); ?>
					<div class="logo-container">
					<?php

							$image = get_sub_field('organization_logo');
							$size = 'medium-nocrop'; // (thumbnail, medium, large, full or custom size)

							if( $image ) { echo wp_get_attachment_image( $image, $size ); }
					?>
				</div>
				<?php endwhile; ?>
	</div>
	<?php endif; ?>
</div>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap row">
					<div class="col-xs-12 col-md-6">
						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	    					'container_class' => 'footer-links ',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'startertheme' ),   // nav name
	    					'menu_class' => 'nav footer-nav ',            // adding custom nav class
	    					'theme_location' => 'footer-links',             // where it's located in the theme
	    					'before' => '',                                 // before the menu
	    					'after' => '',                                  // after the menu
	    					'link_before' => '',                            // before each link
	    					'link_after' => '',                             // after each link
	    					'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => 'starter_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
						<?php the_field('address', 'option'); ?> <?php if(get_field('email', 'option')); ?>| <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</div>
					<div class="col-xs-12 col-md-6 social">
							<?php if( have_rows('social_repeater', 'option') ): ?>
	            <ul class="row">
		            <?php while ( have_rows('social_repeater', 'option') ) : the_row(); ?>
									<li>
										<?php $social = get_sub_field('name');  ?>
										<a href="<?php the_sub_field('link'); ?>" aria-hidden target="_blank" title="<?php echo $social['label']; ?>" class="fab fa-<?php echo $social['value']; ?>"><span><?php echo $social['label']; ?></span></a>
									</li>
								<?php endwhile; endif; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/starter.php ?>
		<?php wp_footer(); ?>



	</body>

</html> <!-- end of site. what a ride! -->
