<?php 
    // Projects
	register_post_type( 'Projects',
    // CPT Options
    array(
        'labels' => array(
        'name' => __( 'Projects' ),
        "singular_name" => __( 'Projects', 'Trivedaa' ),
        "menu_name" => __( 'Projects', 'Trivedaa' ),
        "all_items" => __( 'All Projects', 'Trivedaa' ),
        "add_new" => __( 'Add New Projects ', 'Trivedaa' ),
        "add_new_item" => __( 'Add New Projects ', 'Trivedaa' ),
        "edit_item" => __( 'Edit Projects', 'Trivedaa' ),
        "new_item" => __( 'Projectss', 'Trivedaa' ),
        "view_item" => __( 'View Projects', 'Trivedaa' ),
        "search_items" => __( 'Search Projects', 'Trivedaa' ),
        "not_found" => __( 'No Projects Found', 'Trivedaa' ),
        "not_found_in_trash" => __( 'No Projects found in the Trash', 'Trivedaa' ),
        "parent_item_colon" => __( 'Parent Projects', 'Trivedaa' ),
        "archives" => __( 'Projectss ', 'Trivedaa' ),
        "filter_items_list" => __( 'Filter Projects List', 'Trivedaa' ),
        "items_list_navigation" => __( 'Projects Navigation', 'Trivedaa' ),
        "items_list" => __( 'Projectss ', 'Trivedaa' ),
        "parent_item_colon" => __( 'Parent Projects', 'Trivedaa' ),
        ),
        
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('with_front'=> false,'slug' => 'projects'),
        'supports' => array('thumbnail', "title", "editor"),
        'menu_icon' => 'dashicons-building',
        )
    );
?>