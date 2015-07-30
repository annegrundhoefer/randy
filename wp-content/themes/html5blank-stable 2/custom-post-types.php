<?php 

	//***************************************************************************
    // Slides
    //***************************************************************************
    register_post_type( 'ri_slides',
        array(
            'labels' => array(
                'name'                  => 'Slides',
                'singular_name'         => 'Slide',
                'add_new'               => 'Add New',
                'add_new_item'          => 'Add New Slide',
                'edit_item'             => 'Edit Slide',
                'new_item'              => 'New Slide',
                'all_items'             => 'All Slides',
                'view_item'             => 'View Slide',
                'search_items'          => 'Search Slides',
                'not_found'             => 'No slides found',
                'not_found_in_trash'    => 'No slides found in trash',
                'parent_item_colon'     => '',
                'menu_name'             => 'Homepage Slides'
            ),
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'query_var'             => true,
            'rewrite'               => false,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => false,
            'menu_position'         => null,
            'taxonomies' => array('category'),
            'menu_icon'             => 'dashicons-video-alt3',
            'supports'              => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'post_meta' ), 
         )
    );

	//***************************************************************************
    // Practice Areas
    //***************************************************************************
    register_post_type( 'ri_areas',
        array(
            'labels' => array(
                'name'                  => 'Practice Areas',
                'singular_name'         => 'Area',
                'add_new'               => 'Add New',
                'add_new_item'          => 'Add New Area',
                'edit_item'             => 'Edit Area',
                'new_item'              => 'New Area',
                'all_items'             => 'All Areas',
                'view_item'             => 'View Area',
                'search_items'          => 'Search Areas',
                'not_found'             => 'No areas found',
                'not_found_in_trash'    => 'No areas found in trash',
                'parent_item_colon'     => '',
                'menu_name'             => 'Practice Areas'
            ),
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'query_var'             => true,
            'rewrite'               => false,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => false,
            'menu_position'         => null,
            'taxonomies' => array('category'),
            'menu_icon'             => 'dashicons-video-alt3',
            'supports'              => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'post_meta' ), 
         )
    );

	//***************************************************************************
    // Testimonials
    //***************************************************************************
    register_post_type( 'ri_testimonials',
        array(
            'labels' => array(
                'name'                  => 'Testimonials',
                'singular_name'         => 'Testimonial',
                'add_new'               => 'Add New',
                'add_new_item'          => 'Add New Testimonial',
                'edit_item'             => 'Edit Testimonial',
                'new_item'              => 'New Testimonial',
                'all_items'             => 'All Testimonials',
                'view_item'             => 'View Testimonial',
                'search_items'          => 'Search Testimonials',
                'not_found'             => 'No testimonials found',
                'not_found_in_trash'    => 'No testimonials found in trash',
                'parent_item_colon'     => '',
                'menu_name'             => 'Testimonials'
            ),
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'query_var'             => true,
            'rewrite'               => false,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => false,
            'menu_position'         => null,
            'taxonomies' => array('category'),
            'menu_icon'             => 'dashicons-video-alt3',
            'supports'              => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'post_meta' ), 
         )
    );
	


?>
