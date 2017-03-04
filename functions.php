<?php

if ( ! function_exists( 'gh_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function gh_theme_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on GH-theme, use a find and replace
         * to change 'gh-theme' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'gh-theme', get_template_directory() . '/languages' );

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
            'top-menu' => esc_html__( 'Primary', 'nava' ),
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

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'gh_theme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'gh_theme_setup' );


function gh_theme_scripts() {



    wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700');

    wp_enqueue_style( 'et-googleFonts');

    wp_register_style('css-libs', get_template_directory_uri() . '/libs.css' );

    wp_enqueue_style('css-libs');

    /*wp_register_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_style('bootstrap');*/

    wp_enqueue_style( 'gh-theme-style', get_stylesheet_uri() );


//    wp_enqueue_script( 'jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );

    wp_enqueue_script( 'js-libs', get_template_directory_uri() . '/js/libs.min.js' );


    //wp_enqueue_script( 'gh-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

   // wp_enqueue_script( 'gh-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'gh_theme_scripts' );


