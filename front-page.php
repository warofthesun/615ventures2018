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
									<article class="ventures flexible_section">
									<h1 style="text-align:<?php the_sub_field('align_header'); ?>"><?php the_sub_field('header'); ?></h1>

											<?php if( have_rows('ventures_repeater') ): ?>

				                  <?php while ( have_rows('ventures_repeater') ) : the_row(); ?>

				                    <div>
				                      <?php if (get_sub_field('name') ): ?>
					                      <h2 style="text-align:<?php the_sub_field('align_name'); ?>"><?php the_sub_field('name'); ?></h2>
					                    <?php endif; ?>
				                    </div>
														<div class="row">
															<div class="col-xs-12 col-md-4 <?php the_sub_field('gallery_position'); ?>">
																<?php the_sub_field('overview'); ?>
															</div>
															<div class="col-xs-12 col-md-8">
																<?php	$images = get_sub_field('images');

																		if( $images ): ?>
																		<section class="slider">
																		    <div id="slider" class="flexslider">
																		        <ul class="slides">
																		            <?php foreach( $images as $image ): ?>
																		                <li>
																		                    <img src="<?php echo $image['sizes']['gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" />
																												<?php if ($image['title']) : ?>
																													<h3><?php echo $image['title']; ?></h3>
																												<?php endif; ?>
																												<?php if ($image['description']) : ?>
																		                    	<p><?php echo $image['description']; ?></p>
																												<?php endif; ?>
																		                </li>
																		            <?php endforeach; ?>
																		        </ul>
																		    </div>
																			</section>
																		<?php endif; ?>
					                    </div>
														</div>
				                  <?php endwhile; endif; ?>
												</article>
											<?php endif; endwhile; ?>
								<?php endif; ?>





							<?php endwhile; endif; ?>

						</main>



				</div>

			</div>

<?php get_footer(); ?>
