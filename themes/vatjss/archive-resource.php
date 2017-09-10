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
        <div class="housing-toggle"><p>Housing Resources</p></div>
        <section class="housing-resource-list">
          <div class="panel">
          <?php
              $args = array( 
                'numberposts' =>  -1,
                'post_type' => 'resource',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'resources-type',
                    'field'    => 'slug',
                    'terms'    => 'housing-support',
                  ),
                )
              );
              $resource_posts = get_posts( $args );
              d($resource_posts);
          ?>
          <?php foreach ( $resource_posts as $resource ) : setup_postdata( $resource ); ?>
          <h3><?php echo $resource->post_title ?></h3>
          <p><?php echo $resource->list_item ?></p>
          <?php endforeach; wp_reset_postdata(); ?>
        </section>
        <div class="justice-toggle"><p>Justice Resources</p></div>
        <section class="justice-resource-list">
          <div class="panel">
          <?php
              $args = array( 
                'numberposts' =>  -1,
                'post_type' => 'resource',
                'tax_query' => array(
                  array(
                    'taxonomy'    => 'resources-type',
                    'field'       => 'slug',
                    'terms'       => 'justice-resources',
                  ),
                )
              );
              $resource_posts = get_posts( $args );
              d($resource_posts);
          ?>
          <?php foreach ( $resource_posts as $resource ) : setup_postdata( $resource ); ?>
          <h3><?php echo $resource->post_title ?></h3>
          <p><?php echo $resource->post_content ?></p>
          <?php endforeach; wp_reset_postdata(); ?>
        </section>
        <div class="community-toggle"><p>Community Resources</p></div>
        <section class="community-resource-list">
          <div class="panel">
          <?php
              $args = array( 
                'numberposts' =>  -1,
                'post_type' => 'resource',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'resources-type',
                    'field'    => 'slug',
                    'terms'    => 'community-resources',
                  ),
                )
              );
              $resource_posts = get_posts( $args );
              d($resource_posts);
          ?>
          <?php foreach ( $resource_posts as $resource ) : setup_postdata( $resource ); ?>
          <h3><?php echo $resource->post_title ?></h3>
          <p><?php echo $resource->post_content ?></p>
          <?php endforeach; wp_reset_postdata(); ?>
        </section>
      </div>
		</main>
	</div>
<?php get_footer(); ?>
