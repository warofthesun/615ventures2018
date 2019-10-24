<!--page-who we are-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row who-we-are_page">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>


								</header>

							<?php endwhile; else : endif; ?>

								<section class="entry-content " itemprop="articleBody">
									<?php

									    $your_query = new WP_Query( 'pagename=home' );

									    while ( $your_query->have_posts() ) : $your_query->the_post();
									       include 'partials/flexible-teammembers.php';
									    endwhile;

									    wp_reset_postdata();
									?>



								</section>

							</article>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
