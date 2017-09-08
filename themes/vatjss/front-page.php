<?php
/**
 * Template Name: Front Page
 * @package VATJSS_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="vatjss-home-hero">

    </section>
    <section class="vatjss-home-banner vatjss-vertical-align-center">
      <h2 class="vatjss-text-uppercase vatjss-text-center">strengthening resiliency within the aboriginal community</h2>
    </section>
    <section class="vatjss-container-fluid">
      <?php
        $service_types = get_terms( 'services-type' );
        $housing = $service_types[1];
      ?>
      <div class="housing-services-fp">
        <h3 class="housing-title-fp">Housing Services</h3>
        <p class="housing-description-fp"><?php echo $housing->description ?></p>
        <div class="housing-learn-more-fp"><a href="services/housing-services">Learn More <span>></span></a></div>
      </div>
      <?php $justice = $service_types[2]; ?>
      <div class="justice-services-fp">
        <h3 class="justice-title-fp">Transformative Justice Services</h3>
        <p class="justice-description-fp"><?php echo $justice->description ?></p>
        <div class="justice-learn-more-fp"><a href="services/justice-services">Learn More <span>></span></a></div>
      </div>
      <?php
        $resources_category = get_categories( 'resources=types' );
        $resources = $resources_category[0];
      ?>
      <div class="resources-fp">
        <h3 class="resources-title-fp">Resources</h3>
        <p class="resources-description-fp"><?php echo $resources->description ?></p>
        <div class="resources-learn-more-fp"><a href="resources">Learn More <span>></span></a></div>
      </div>
      <?php
        $resource_args = array( 'taxonomy' => 'resources-type');
        $resource_types = get_terms( $resource_args );
      ?>
      <?php foreach ( $resource_types as $resource_type ) : setup_postdata( $resource_type ); ?>
        <div>
          <p><?php echo $resource_type->description ?></p>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </section>
    <section class="vatjss-home-mobile-subscribe-banner vatjss-vertical-align-center">
      <button>Subscribe</button>
    </section>
  </main>
</div>


<?php get_footer(); ?>