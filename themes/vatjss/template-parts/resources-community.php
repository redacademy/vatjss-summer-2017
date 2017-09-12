<?php
/**
 * Template part for displaying housing resources.
 *
 * @package vatjss_Theme
 */

?>

<div class="panel">
  <?php
      $terms = get_terms( 'resources-type' );
      $args1 = array( 'child_of' => 7, 'parent' => 7 );
      $term1_children = get_terms( 'resources-type', $args1 );
      echo '<div class="resources-accordion">';
      foreach ( $term1_children as $term1_child ) : setup_postdata( $term1_child );
        echo
        '<div class="resource-accordion-button resource-accordion-title-' . $term1_child->term_id . '">
        <h4>' . $term1_child->name . '</h4>
          <div class=button-chevron>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
        <div class="resource-accordion-section resource-accordion-section-' . $term1_child->term_id . '">';
        $args2 = array( 'child_of' => $term1_child->term_id, 'parent' => $term1_child->term_id );
        $term2_children = get_terms( 'resources-type', $args2 );
        foreach ( $term2_children as $term2_child ) : setup_postdata( $term2_child );
          $args3 = array( 
            'numberposts' =>  -1,
            'post_type' => 'resource',
            'tax_query' => array(
              array(
                'taxonomy' => 'resources-type',
                'field'    => 'slug',
                'terms'    => $term2_child,
              ),
            )
          );
          $resource_posts = get_posts( $args3 );
  ?>
          <h5><?php echo $term2_child->name ?></h5>
          <ul>
            <?php foreach ( $resource_posts as $resource ) : setup_postdata( $resource ); ?>
            <li><a href="<?php echo $resources->link_url ?>" target="_blank"><?php echo $resource->list_item ?></a></li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        <?php endforeach; wp_reset_postdata(); ?>
        </div> 
      <?php endforeach; wp_reset_postdata(); ?>
</div>