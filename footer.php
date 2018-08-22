<div class="partners">
	<div class="wrap row" style="align-items: center;justify-content: space-around;">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_field('header', 'option'); ?></h2>
			<?php if( have_rows('trusted_by_repeater', 'option') ): ?>
				<?php while ( have_rows('trusted_by_repeater', 'option') ) : the_row(); ?>
					<?php

							$image = get_sub_field('organization_logo');
							$size = 'medium-nocrop'; // (thumbnail, medium, large, full or custom size)

							if( $image ) { echo wp_get_attachment_image( $image, $size ); }

					?>
				<?php endwhile; endif; ?>
		<?php endwhile; endif; ?>
	</div>
</div>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap row">

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

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/starter.php ?>
		<?php wp_footer(); ?>

		<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	</body>

</html> <!-- end of site. what a ride! -->
