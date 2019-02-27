<?php

// LOAD starter CORE (if you remove this, the theme will break)
require_once( 'library/starter.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once( 'library/admin.php' );

/*********************
LAUNCH starter
Let's get everything up and running.
*********************/

function starter_ahoy() {

  //Allow editor style.
  add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // let's get language support going, if you need it
  load_theme_textdomain( 'startertheme', get_template_directory() . '/library/translation' );

  // USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
  require_once( 'library/custom-post-type.php' );

  // launching operation cleanup
  add_action( 'init', 'starter_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'starter_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'starter_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'starter_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'starter_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'starter_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  starter_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'starter_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'starter_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'starter_excerpt_more' );

} /* end starter ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'starter_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'starter-thumb-600', 600, 150, true );
add_image_size( 'starter-thumb-300', 300, 100, true );
add_image_size( 'gallery-image', 680, 450, true );
add_image_size( 'square', 450, 450, true );
add_image_size( 'medium-nocrop', 450, false );


add_filter( 'image_size_names_choose', 'starter_custom_image_sizes' );

function starter_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'gallery-image' => __('Gallery Image'),
        'starter-thumb-600' => __('600px by 150px'),
        'starter-thumb-300' => __('300px by 100px'),
    ) );
}

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function starter_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'startertheme' ),
		'description' => __( 'The first (primary) sidebar.', 'startertheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function starter_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'startertheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'startertheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'startertheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'startertheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!


function starter_fonts() {
  wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Lato:300,400,400i,700|Roboto:400,700,800');
}

add_action('wp_enqueue_scripts', 'starter_fonts');


/* Load ScrollMagic Scripts */

function scrollmagic_scripts() {

		wp_register_script( 'greensock', get_stylesheet_directory_uri() . '/library/js/libs/greensock/TweenMax.min.js', array(), '', true );

    wp_register_script( 'scrollmagic', get_stylesheet_directory_uri() . '/library/scrollmagic/uncompressed/ScrollMagic.js', array(), '', true );

    wp_register_script( 'animation', get_stylesheet_directory_uri() . '/library/scrollmagic/uncompressed/plugins/animation.gsap.js', array(), '', true );

    wp_register_script( 'indicators', get_stylesheet_directory_uri() . '/library/scrollmagic/uncompressed/plugins/debug.addIndicators.js', array(), '', true );



		// enqueue styles and scripts
		wp_enqueue_script( 'greensock' );
		wp_enqueue_script( 'scrollmagic' );
		wp_enqueue_script( 'animation' );
    wp_enqueue_script( 'indicators' );
}

add_action( 'wp_enqueue_scripts', 'scrollmagic_scripts' );

include 'partials/acf-fields.php';

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

function ns_google_analytics() { ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135263987-1"></script>
  <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-135263987-1');
  </script>
  <?php
  }

add_action( 'wp_head', 'ns_google_analytics', 10 );
/* DON'T DELETE THIS CLOSING TAG */ ?>
