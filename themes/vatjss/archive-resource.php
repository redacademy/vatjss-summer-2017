<?php
/**
 * The template for displaying archive pages.
 * 
 * Template Name: Resources
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary-resources" class="resources-content-area">
		<main id="main" class="site-main" role="main">
      <div class="vatjss-mobile-resource-toggle-container">
        <div class="housing-toggle resource-toggle-mobile resource-toggle-mobile-on"><a href='#housing'><h3>Housing<span> Resources</span></h3></a></div>
        <div class="justice-toggle resource-toggle-mobile"><a href='#justice'><h3>Justice<span> Resources</span></h3></a></div>
        <div class="community-toggle resource-toggle-mobile"><a href='#community'><h3>Community<span> Resources</span></h3></a></div>
      </div>
      <div class="vatjss-mobile-accordion">
        <div class="vatjss-resource-desktop-content">
          <?php
            $args = array( 'post_type' => 'page', 'post__in' => array(293) );
            $resource_page = get_posts( $args );
            foreach ( $resource_page as $post ) : setup_postdata( $post );
            
              echo '<h3 class=resource-subtitle>' . esc_html(CFS()->get( 'subtitle' )) . '</h3>';
              the_content();
            
            endforeach; wp_reset_postdata();
          ?>
        </div> 
        <div id='housing' class="housing-toggle resource-toggle-desktop"><h3>Housing</h3></div>
        <section class="housing-resource-list resource-list-page resource-toggle-on">
          <?php get_template_part('template-parts/resources', 'housing'); ?>
        </section>
        <div id='justice' class="justice-toggle resource-toggle-desktop"><h3>Justice</h3></div>
        <section class="justice-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'justice'); ?>
        </section>
        <div id='community' class="community-toggle resource-toggle-desktop"><h3>Community</h3></div>
        <section class="community-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'community'); ?>
        </section>
      </div>
		</main>
	</div>
<?php get_footer(); ?>