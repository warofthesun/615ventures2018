<!--archive-custom_type-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap  row">

					<main id="main" class="col-xs-12 " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>
						<ul class="row recognition flexible_section">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	                  <li class="col-xs-12 col-sm-6" style="display:flex;">
	                    <a href="<?php the_field('article_link'); ?>" target="_blank" class="row">
	                    <div class="col-xs-3">
	                      <?php the_post_thumbnail('medium-nocrop'); ?>
	                    </div>
	                    <div class="col-xs-9">

	                        <h2 itemprop="headline"><?php the_title(); ?></h2>

	                        <p class="byline vcard">
	                          <?php the_field('article_publisher'); ?> | <?php printf( __().' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__().' ', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
	                        </p>
	                        <?php the_content(); ?>

	                    </div>
	                    </a>
	                  </li>

							<?php endwhile; ?>

							</ul>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'startertheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'Error message archive custom type', 'startertheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
