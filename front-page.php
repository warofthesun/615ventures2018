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

							<?php include 'partials/flexible.php'; ?>

							<?php endwhile; endif; ?>

						</main>



				</div>

			</div>

<?php get_footer(); ?>
