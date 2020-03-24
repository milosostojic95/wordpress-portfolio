<?php
// addiing css and js
  function load_stylesheet() {
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(),'all');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
  }
  add_action('wp_enqueue_scripts','load_stylesheet');
// adding theme support
  function theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
  }
  add_action('after_setup_theme', 'theme_setup');

  register_nav_menus(
    array(
      'top-menu' => __('Top Menu', 'theme'),

    )
  );



  // Our custom post type function
  function create_posttype() {

    register_post_type( 'project',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Project' ),
                'singular_name' => __( 'Project'),
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'project'),
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-products',
            'support' => array(
              'title', 'thumbnail', 'editor', 'excerpt', 'comment'
            )
        )
    );
  }
  // Hooking up our function to theme setup
  add_action( 'init', 'create_posttype' );

  //custom image sizes
  add_image_size('product_image_large', 700,700, false);
  add_image_size('product_image_small', 400,400, false);
