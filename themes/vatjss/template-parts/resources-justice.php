<?php
/**
 * Template part for displaying justice resources.
 *
 * @package vatjss_Theme
 */

?>

<div class="panel">
  <?php
      $args1 = array( 'child_of' => 5, 'parent' => 5 );
      $term1_children = get_terms( 'resources-type', $args1 );
      foreach ( $term1_children as $term1_child ) : setup_postdata( $term1_child );
        echo '<h4>' . $term1_child->name . '</h4>';
        $args2 = array( 'child_of' => $term1_child->term_id, 'parent' => $term1_child->term_id );
        $term2_children = get_terms( 'resources-type', $args2 );
        foreach ( $term2_children as $term2_child ) : setup_postdata( $term2_child );
          $args3 = array( 
            'numberposts' =>  -1,
            'post_type' => 'resource',
            'tax_query' => array(
              array(
                'taxonomy'  => 'resources-type',
                'field'     => 'slug',
                'terms'     => $term2_child,
              ),
            )
          );
          $resource_posts = get_posts( $args3 );
  ?>
          <h5><?php echo $term2_child->name ?></h5>
          <ul>
            <?php foreach ( $resource_posts as $resource ) : setup_postdata( $resource ); ?>
              <li><a href="<?php echo $resources->link_url ?>" target="blank"><?php echo $resource->list_item ?></a></li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        <?php endforeach; wp_reset_postdata(); ?>
      <?php endforeach; wp_reset_postdata(); ?>
</div>