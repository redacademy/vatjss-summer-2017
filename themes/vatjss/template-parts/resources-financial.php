<?php
/**
 * Template part for displaying financial resources.
 *
 * @package vatjss_Theme
 */

?>

<div class="panel">
  <?php
    $terms = get_terms( 'resources-type' );
    $args1 = array( 'child_of' => 41, 'parent' => 41 );
    $term_children = get_terms( 'resources-type', $args1 );
    foreach ( $term_children as $term_child ) : setup_postdata( $term_child );
    $args2 = array( 
      'numberposts' =>  -1,
      'post_type' => 'resource',
      'tax_query' => array(
        array(
          'taxonomy' => 'resources-type',
          'field'    => 'slug',
          'terms'    => $term_child,
        ),
      )
    );
    $resource_posts = get_posts( $args2 );
?>
    <h5><?php echo $term_child->name ?></h5>
    <ul>
      <?php foreach ( $resource_posts as $resource ) : setup_postdata( $resource ); ?>
        <li><a href="<?php echo $resource->link_url ?>" target="_blank"><?php echo $resource->list_item ?></a></li>
      <?php endforeach; wp_reset_postdata(); ?>
    </ul>
  <?php endforeach; wp_reset_postdata() ?>
</div>