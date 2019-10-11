<?php
if( have_rows('front_page_content') ):
// loop through the rows of data
  while ( have_rows('front_page_content') ) : the_row();
    // Section Header
    if( get_row_layout() == 'section_header' ): ?>

      <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>

      <h2><?php the_sub_field('header'); ?></h2>
      <?php
      // Section Ventures
      ?>
      <?php elseif( get_row_layout() == 'ventures' ): ?>

        <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>

        <article class="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>  flexible_section">

          <h1 style="text-align:<?php the_sub_field('align_header'); ?>" <?php if(get_sub_field('first_section') ) : ?> class="first" <?php endif; ?>><?php the_sub_field('header'); ?></h1>

          <?php if( have_rows('ventures_repeater') ): ?>

            <?php while ( have_rows('ventures_repeater') ) : the_row(); ?>
              <div class="reveal">
                <div>

                  <?php if (get_sub_field('name') ): ?>

                    <h2 style="text-align:<?php the_sub_field('align_name'); ?>" ><?php the_sub_field('name'); ?></h2>

                  <?php endif; ?>

                </div>

                <div class="row">

                  <div class="col-xs-12 col-md-4 <?php the_sub_field('gallery_position'); ?>">

                    <?php the_sub_field('overview'); ?>

                  </div>

                  <div class="col-xs-12 col-md-8">

                    <?php	$images = get_sub_field('images'); if( $images ): ?>

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
              </div>
            <?php endwhile; ?>

          <?php endif; ?>

        </article>
        <?php
        // Section Who We Are
        ?>
      <?php elseif( get_row_layout() == 'who_we_are' ): ?>
        <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
        <article class="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>  flexible_section">

          <h1 <?php if(get_sub_field('first_section') ) : ?> class="first" <?php endif; ?> style="text-align:<?php the_sub_field('align_header'); ?>"><?php the_sub_field('header'); ?></h1>
          <div class="reveal">
            <?php if( have_rows('team_member_repeater') ): ?>
            <ul class="row">
            <?php while ( have_rows('team_member_repeater') ) : the_row(); ?>

                <li class="col-xs-12 <?php if( get_field('team_members_per_row') == 'two' ) { ?>col-md-6<?php } else { ?>col-md-4<?php } ?>">
                  <div class="col-xs-12" style="display:flex;flex-direction:column;">
                    <div class="col-xs-8" style="filter: url(#grayscale);align-self:center;">
                      <?php

                          $image = get_sub_field('image');
                          $size = 'square'; // (thumbnail, medium, large, full or custom size)

                          if( $image ) {

                            echo wp_get_attachment_image( $image, $size );

                          }

                      ?>
                    </div>
                    <div class="col-xs-12">
                      <h2><?php the_sub_field('name'); ?></h2>
                    </div>
                  </div>

                  <div class="col-xs-12">
                      <?php the_sub_field('bio'); ?>
                  </div>

                </li>
            <?php endwhile; ?>
              <ul>
          <?php endif; ?>
          </div>
        </article>
        <?php
        // Section Philanthropy
        ?>
        <?php elseif( get_row_layout() == 'philanthropy' ): ?>
        <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
        <article class="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>  flexible_section">
          <h1 <?php if(get_sub_field('first_section') ) : ?> class="first" <?php endif; ?> style="text-align:<?php the_sub_field('align_header'); ?>"><?php the_sub_field('header'); ?></h1>
          <div class="reveal">
            <?php if( have_rows('organization_repeater') ): ?>
            <ul class="row">
            <?php while ( have_rows('organization_repeater') ) : the_row(); ?>
              <li class="col-xs-6 col-md-4">
                <div class="col-xs-12" style="display:flex;flex-direction:row;">
                  <div class="col-xs-12">
                    <?php

                        $image = get_sub_field('image');
                        $size = 'medium-nocrop'; // (thumbnail, medium, large, full or custom size)

                        if( $image ) {

                          echo wp_get_attachment_image( $image, $size );

                        }

                    ?>
                    <h2><?php the_sub_field('name'); ?></h2>
                    <?php the_sub_field('blurb'); ?>
                  </div>

                </div>
                </li>
            <?php endwhile; ?>
              <ul>
          <?php endif; ?>
          </div>
        </article>
        <?php
        // Section Recognition
        ?>
      <?php elseif( get_row_layout() == 'recognition' ): ?>
        <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
        <article class="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>  flexible_section">
          <h1 <?php if(get_sub_field('first_section') ) : ?> class="first" <?php endif; ?> style="text-align:<?php the_sub_field('align_header'); ?>"><?php the_sub_field('header'); ?></h1>
          <div class="reveal">
            <?php $loop = new WP_Query( array(
                  'post_type' => 'Recognition',
                  'posts_per_page' => 4
                )
              ); ?>
              <ul class="row">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
                <?php endwhile; wp_reset_query(); ?>
              </ul>
              <a href="/recognition" class="primary-btn" style="float:right;margin-bottom:2em;">See All</a>
          </div>
        </article>
      <?php endif; ?>

  <?php endwhile; ?>

<?php endif; ?>
