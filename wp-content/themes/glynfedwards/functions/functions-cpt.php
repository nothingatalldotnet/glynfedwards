<?php
    function remove_default_post_type() {
        remove_menu_page('edit.php');
    }
    add_action('admin_menu', 'remove_default_post_type');

    function remove_default_post_type_menu_bar($wp_admin_bar) {
        $wp_admin_bar->remove_node('new-post');
    }
    add_action('admin_bar_menu', 'remove_default_post_type_menu_bar', 999);

    function remove_draft_widget() {
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    }
    add_action('wp_dashboard_setup', 'remove_draft_widget', 999);


    // post types
    function create_post_type() {
        register_post_type('news',
            array(
                'labels' => array(
                    'name' => __('News'),
                    'singular_name' => _('News')
                ),
                'show_in_nav_menus' => true,
                'menu_position'=> 20,
                'menu_icon' => 'dashicons-megaphone',
                'public' => true,
                'has_archive' => true,
                'query_var' => true,
                'supports' => array('title','revisions','author', 'editor', 'thumbnail', 'excerpt'),
                'rewrite' => array(
                    'slug'  => 'news',
                    'pages' => true,
                    'with_front' => true
                ),
            )
        );

        register_post_type('testimonials',
            array(
                'labels' => array(
                    'name' => __('Testimonials'),
                    'singular_name' => _('Testimonials')
                ),
                'show_in_nav_menus' => true,
                'menu_position'=> 20,
                'menu_icon' => 'dashicons-format-quote',
                'public' => true,
                'has_archive' => true,
                'query_var' => true,
                'supports' => array('title','revisions','author', 'editor'),
                'rewrite' => array(
                    'slug'  => 'testimonials',
                    'pages' => true,
                    'with_front' => true
                ),
            )
        );

        register_post_type('events',
            array(
                'labels' => array(
                    'name' => __('Events'),
                    'singular_name' => _('Events')
                ),
                'show_in_nav_menus' => true,
                'menu_position'=> 20,
                'menu_icon' => 'dashicons-tickets-alt',
                'public' => true,
                'has_archive' => true,
                'query_var' => true,
                'supports' => array('title','revisions','author', 'editor', 'thumbnail', 'excerpt'),
                'rewrite' => array(
                    'slug'  => 'events',
                    'pages' => true,
                    'with_front' => true
                ),
            )
        );

        register_post_type('scrapbook',
            array(
                'labels' => array(
                    'name' => __('Scrapbook'),
                    'singular_name' => _('Scrapbook')
                ),
                'show_in_nav_menus' => true,
                'menu_position'=> 20,
                'menu_icon' => 'dashicons-book',
                'public' => true,
                'has_archive' => true,
                'query_var' => true,
                'supports' => array('title','revisions','author', 'editor'),
                'rewrite' => array(
                    'slug'  => 'scrapbook',
                    'pages' => true,
                    'with_front' => true
                ),
            )
        );
    }
    add_action('init','create_post_type');