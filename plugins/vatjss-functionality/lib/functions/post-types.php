<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Services Post Type
function vatjss_cpt_services() {
  
    $labels = array(
      'name'                  => 'Services',
      'singular_name'         => 'Service',
      'menu_name'             => 'Services',
      'name_admin_bar'        => 'Services',
      'archives'              => 'Services Archives',
      'attributes'            => 'Services Attributes',
      'parent_item_colon'     => 'Parent Service:',
      'all_items'             => 'All Services',
      'add_new_item'          => 'Add New Service',
      'add_new'               => 'Add New',
      'new_item'              => 'New Service',
      'edit_item'             => 'Edit Service',
      'update_item'           => 'Update Service',
      'view_item'             => 'View Service',
      'view_items'            => 'View Services',
      'search_items'          => 'Search Service',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Service',
      'uploaded_to_this_item' => 'Uploaded to this Service',
      'items_list'            => 'Services list',
      'items_list_navigation' => 'Services list navigation',
      'filter_items_list'     => 'Filter Services list',
    );
    $args = array(
      'label'                 => 'Service',
      'description'           => 'A custom post-type listing services supplied by VATJSS',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-groups',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'services', $args );
  
  }
  add_action( 'init', 'vatjss_cpt_services', 0 );

// Add your custom post types here...

// Register FAQ Post Type
function vatjss_cpt_faq_post_type() {
  
    $labels = array(
      'name'                  => 'faqs',
      'singular_name'         => 'faq',
      'menu_name'             => 'FAQ',
      'name_admin_bar'        => 'FAQ',
      'archives'              => 'faq Archives',
      'attributes'            => 'faq Attributes',
      'parent_item_colon'     => 'Parent faq:',
      'all_items'             => 'All faq',
      'add_new_item'          => 'Add New faq',
      'add_new'               => 'Add New',
      'new_item'              => 'New faq',
      'edit_item'             => 'Edit faq',
      'update_item'           => 'Update faq',
      'view_item'             => 'View faq',
      'view_items'            => 'View faqs',
      'search_items'          => 'Search faq',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into faq',
      'uploaded_to_this_item' => 'Uploaded to this faq',
      'items_list'            => 'faqs list',
      'items_list_navigation' => 'Items list navigation',
      'filter_items_list'     => 'Filter faqs list',
    );
    $args = array(
      'label'                 => 'faq',
      'description'           => 'This is a custom post-type for faq',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'revisions', ),
      'taxonomies'            => array( 'category', 'post_tag' ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-editor-help',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'faq', $args );
  
  }
  add_action( 'init', 'vatjss_cpt_faq_post_type', 0 );

  // Register Resources Post Type
function vatjss_cpt_resources_post_type() {
  
    $labels = array(
      'name'                  => 'resources',
      'singular_name'         => 'resource',
      'menu_name'             => 'Resources',
      'name_admin_bar'        => 'Resources',
      'archives'              => 'Resource Archives',
      'attributes'            => 'Resource Attributes',
      'parent_item_colon'     => 'Parent Resource:',
      'all_items'             => 'All Resources',
      'add_new_item'          => 'Add New Resource',
      'add_new'               => 'Add New',
      'new_item'              => 'New Resource',
      'edit_item'             => 'Edit Resource',
      'update_item'           => 'Update Resource',
      'view_item'             => 'View Resource',
      'view_items'            => 'View Resources',
      'search_items'          => 'Search Resource',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into resource',
      'uploaded_to_this_item' => 'Uploaded to this resource',
      'items_list'            => 'resources list',
      'items_list_navigation' => 'resources list navigation',
      'filter_items_list'     => 'Filter resources list',
    );
    $args = array(
      'label'                 => 'resource',
      'description'           => 'Custom post type for RESOURCES',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'excerpt', 'revisions', ),
      'taxonomies'            => array( 'category', 'post_tag' ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-admin-multisite',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'resource', $args );
  
  }
  add_action( 'init', 'vatjss_cpt_resources_post_type', 0 );

  // Register Staff Post Type
function vatjss_cpt_staff() {
  
    $labels = array(
      'name'                  => 'Staffs',
      'singular_name'         => 'Staff',
      'menu_name'             => 'Staff',
      'name_admin_bar'        => 'Staff',
      'archives'              => 'Staff Archives',
      'attributes'            => 'Staff Attributes',
      'parent_item_colon'     => 'Parent Staff:',
      'all_items'             => 'All Staffs',
      'add_new_item'          => 'Add New Staff',
      'add_new'               => 'Add New',
      'new_item'              => 'New Staff',
      'edit_item'             => 'Edit Staff',
      'update_item'           => 'Update Staff',
      'view_item'             => 'View Staff',
      'view_items'            => 'View Staff',
      'search_items'          => 'Search Staff',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Staff',
      'uploaded_to_this_item' => 'Uploaded to this Staff',
      'items_list'            => 'Staffs list',
      'items_list_navigation' => 'Staffs list navigation',
      'filter_items_list'     => 'Filter Staffs list',
    );
    $args = array(
      'label'                 => 'Staff',
      'description'           => 'This is a custom post type for staff',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-admin-users',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'staff', $args );
  
  }
  add_action( 'init', 'vatjss_cpt_staff', 0 );

// Register Community Partner Custom Post Type
function vatjss_cpt_community_partners() {
  
    $labels = array(
      'name'                  => 'Community Partners',
      'singular_name'         => 'Community Partner',
      'menu_name'             => 'Comunity Partner',
      'name_admin_bar'        => 'Community Partner',
      'archives'              => 'Partner Archives',
      'attributes'            => 'Partner Attributes',
      'parent_item_colon'     => 'Parent Partner:',
      'all_items'             => 'All Partners',
      'add_new_item'          => 'Add New Partner',
      'add_new'               => 'Add New',
      'new_item'              => 'New Partner',
      'edit_item'             => 'Edit Partner',
      'update_item'           => 'Update Partner',
      'view_item'             => 'View Partner',
      'view_items'            => 'View Partners',
      'search_items'          => 'Search Partner',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Partner',
      'uploaded_to_this_item' => 'Uploaded to this Partner',
      'items_list'            => 'Partners list',
      'items_list_navigation' => 'Partners list navigation',
      'filter_items_list'     => 'Filter Partners list',
    );
    $args = array(
      'label'                 => 'Community Partner',
      'description'           => 'VATJSS community partners',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-universal-access-alt',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'community_partner', $args );
  
  }
  add_action( 'init', 'vatjss_cpt_community_partners', 0 );