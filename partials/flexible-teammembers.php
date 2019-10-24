<?php
if( have_rows('front_page_content') ):
// loop through the rows of data
  while ( have_rows('front_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'who_we_are' ): ?>

        <article class="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>  flexible_section">
          <div class="reveal">
            <?php if( have_rows('team_member_repeater') ): ?>
            <ul class="row">
            <?php while ( have_rows('team_member_repeater') ) : the_row(); ?>

                <li id="<?php $page_link = sanitize_title_for_query( get_sub_field('name') ); echo esc_attr( $page_link ); ?>">
                  <div class="col-xs-12 team-member row">
                    <div class="col-xs-8 col-sm-4 headshot">
                      <?php

                          $image = get_sub_field('image');
                          $size = 'square'; // (thumbnail, medium, large, full or custom size)

                          if( $image ) {

                            echo wp_get_attachment_image( $image, $size );

                          }

                      ?>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                      <h2><?php the_sub_field('name'); ?></h2>
                      <?php the_sub_field('bio'); ?>
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
      <?php endif; ?>

  <?php endwhile; ?>

<?php endif; ?>
