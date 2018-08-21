<!--front-page-->
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="hero_content wrap">
	<h1><?php the_field('hero_text'); ?></h1>
</div>
</div>
			<div id="content">

				<div id="inner-content" class="wrap  row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage">


							<?php
							if( have_rows('front_page_content') ):
								 // loop through the rows of data
								while ( have_rows('front_page_content') ) : the_row();
										if( get_row_layout() == 'section_header' ): ?>
										<a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
										<h2><?php the_sub_field('header'); ?></h2>


								<?php elseif( get_row_layout() == 'ventures' ): ?>
									<a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
									<h2><?php the_sub_field('header'); ?></h2>

											<?php if( have_rows('ventures_repeater') ): ?>

				                  <?php while ( have_rows('ventures_repeater') ) : the_row(); ?>

				                    <div>
				                      <?php if (get_sub_field('name') ): ?>
				                      <span><?php the_sub_field('name'); ?></span>
				                    <?php endif; ?>
				                    </div>
				                    <div>
															<?php	$images = get_sub_field('images');

																	if( $images ): ?>
																	<section class="slider">
																	    <div id="slider" class="flexslider">
																	        <ul class="slides">
																	            <?php foreach( $images as $image ): ?>
																	                <li>
																	                    <img src="<?php echo $image['sizes']['gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" />

																	                    <p class="flex-caption"><?php echo $image['description']; ?></p>

																	                </li>
																	            <?php endforeach; ?>
																	        </ul>
																	    </div>
																		</section>
																	<?php endif; ?>
				                    </div>

														<?php the_sub_field('overview'); ?>
				                  <?php endwhile; ?>




				        <?php endif; ?>

								<?php endif; endwhile; ?>
								<?php endif; ?>





							<?php endwhile; endif; ?>

						</main>



				</div>

			</div>

<?php get_footer(); ?>
