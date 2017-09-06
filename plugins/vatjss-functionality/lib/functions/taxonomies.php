<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Service Taxonomy
function vatjss_tax_services_type() {
  
    $labels = array(
      'name'                       => 'Services',
      'singular_name'              => 'Service',
      'menu_name'                  => 'Taxonomy',
      'all_items'                  => 'All Services',
      'parent_item'                => 'Parent Service',
      'parent_item_colon'          => 'Parent Service:',
      'new_item_name'              => 'New Service Name',
      'add_new_item'               => 'Add New Service',
      'edit_item'                  => 'Edit Service',
      'update_item'                => 'Update Service',
      'view_item'                  => 'View Service',
      'separate_items_with_commas' => 'Separate Services with commas',
      'add_or_remove_items'        => 'Add or remove Services',
      'choose_from_most_used'      => 'Choose from the most used',
      'popular_items'              => 'Popular Services',
      'search_items'               => 'Search Services',
      'not_found'                  => 'Not Found',
      'no_terms'                   => 'No Services',
      'items_list'                 => 'Services list',
      'items_list_navigation'      => 'Services list navigation',
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'services-type', array( 'services' ), $args );
  
  }
  add_action( 'init', 'vatjss_tax_services_type', 0 );

// Register Resource Taxonomy
function vatjss_tax_resources_taxonomy() {
  
    $labels = array(
      'name'                       => _x( 'Resources', 'Taxonomy General Name', 'text_domain' ),
      'singular_name'              => _x( 'Resource', 'Taxonomy Singular Name', 'text_domain' ),
      'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
      'all_items'                  => __( 'All Resources', 'text_domain' ),
      'parent_item'                => __( 'Parent Resource', 'text_domain' ),
      'parent_item_colon'          => __( 'Parent Resource:', 'text_domain' ),
      'new_item_name'              => __( 'New Resource Name', 'text_domain' ),
      'add_new_item'               => __( 'Add New Resource', 'text_domain' ),
      'edit_item'                  => __( 'Edit Resource', 'text_domain' ),
      'update_item'                => __( 'Update Resource', 'text_domain' ),
      'view_item'                  => __( 'View Resource', 'text_domain' ),
      'separate_items_with_commas' => __( 'Separate Resources with commas', 'text_domain' ),
      'add_or_remove_items'        => __( 'Add or remove Resources', 'text_domain' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
      'popular_items'              => __( 'Popular Resources', 'text_domain' ),
      'search_items'               => __( 'Search Resources', 'text_domain' ),
      'not_found'                  => __( 'Not Found', 'text_domain' ),
      'no_terms'                   => __( 'No resources', 'text_domain' ),
      'items_list'                 => __( 'Resources list', 'text_domain' ),
      'items_list_navigation'      => __( 'Resources list navigation', 'text_domain' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'resources-type', array( 'resource' ), $args );
  
  }
  add_action( 'init', 'vatjss_tax_resources_taxonomy', 0 );