<?php
/**
 * The template for displaying archive pages.
 * 
 * Template Name: Resources
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="vatjss-mobile-accordian vatjss-hidden-desktop">
        <div class="housing-toggle"><h3>Housing Resources</h3></div>
        <section class="housing-resource-list">
          <div class="panel">
            <?php
              $terms = get_terms( 'resources-type' );
              $args1 = array( 'child_of' => 33, 'parent' => 33 );
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
                      <li><a href="<?php echo $resource->link_url ?>" target="_blank"><?php echo $resource->list_item ?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                  </ul>
                <?php endforeach; wp_reset_postdata() ?>
              <?php endforeach; wp_reset_postdata() ?>
          </div>
        </section>
        <div class="justice-toggle"><h3>Justice Resources</h3></div>
        <section class="justice-resource-list">
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
        </section>
        <div class="community-toggle"><h3>Community Resources</h3></div>
        <section class="community-resource-list">
          <div class="panel">
          <?php
              $args1 = array( 'child_of' => 7, 'parent' => 7 );
              $term1_children = get_terms( 'resources-type', $args1 );
              echo '<div class="resources-accordion">';
              foreach ( $term1_children as $term1_child ) : setup_postdata( $term1_child );
                echo '<div class=resource-accordion-title-' . $term1_child->term_id . '"><h4>' . $term1_child->name . '</h4></div><div class=resource-accordion-section-' . $term1_child->term_id . '>';
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
        </section>
      </div>
		</main>
	</div>
<?php get_footer(); ?>