<?php
/**
 * Madeinequality functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Madeinequality
 */

if ( ! function_exists( 'madeinequality_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function madeinequality_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Madeinequality, use a find and replace
	 * to change 'madeinequality' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'madeinequality', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'madeinequality' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'madeinequality_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'madeinequality_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function madeinequality_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'madeinequality_content_width', 640 );
}
add_action( 'after_setup_theme', 'madeinequality_content_width', 0 );
function kriesi_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class='pagination-container wow zoomIn mar-b-1x' data-wow-duration='0.5s'>";
				 echo "<ul class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='pagination-item--wide first'><a href='".get_pagenum_link(1)."' class='pagination-link--wide first'>Previous</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li class='pagination-item--wide first'><a href='".get_pagenum_link($paged - 1)."' class='pagination-link--wide first'>Previous</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? " <li class='pagination-item is_active'><a href='".get_pagenum_link($i)."'>".$i."</a></li>":"<li class='pagination-item'><a class='pagination-link' href='".get_pagenum_link($i)."' >".$i."</a></li>";



						 }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li class='pagination-item--wide last'><a href='".get_pagenum_link($paged + 1)."' class='pagination-link--wide last'>Next</a></li>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='pagination-item--wide last'><a href='".get_pagenum_link($pages)." ' class='pagination-link--wide last'>Next</a></li>";
				 echo "</ul>";
         echo "</div>\n";
     }
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function madeinequality_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'madeinequality' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'madeinequality' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'madeinequality_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function madeinequality_scripts() {
	// wp_enqueue_style( 'madeinequality-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array(), '20151215', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	
	// wp_enqueue_script( 'madeinequality-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
		
	// wp_enqueue_script( 'madeinequality-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'madeinequality_scripts' );
