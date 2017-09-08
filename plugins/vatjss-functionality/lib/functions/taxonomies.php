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
      'menu_name'                  => 'Service Type',
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
      'name'                       => 'Resources',
      'singular_name'              => 'Resource',
      'menu_name'                  => 'Resource Type',
      'all_items'                  => 'All Resources',
      'parent_item'                => 'Parent Resource',
      'parent_item_colon'          => 'Parent Resource:',
      'new_item_name'              => 'New Resource Name',
      'add_new_item'               => 'Add New Resource',
      'edit_item'                  => 'Edit Resource',
      'update_item'                => 'Update Resource',
      'view_item'                  => 'View Resource',
      'separate_items_with_commas' => 'Separate Resources with commas',
      'add_or_remove_items'        => 'Add or remove Resources',
      'choose_from_most_used'      => 'Choose from the most used',
      'popular_items'              => 'Popular Resources',
      'search_items'               => 'Search Resources',
      'not_found'                  => 'Not Found',
      'no_terms'                   => 'No resources',
      'items_list'                 => 'Resources list',
      'items_list_navigation'      => 'Resources list navigation',
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