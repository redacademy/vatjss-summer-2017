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
      <h2 class="vatjss-text-uppercase vatjss-text-center">"strengthening resiliency within the aboriginal community"</h2>
    </section>
    <section class="vatjss-container-fluid">
      <?php
        $service_args = array( 'taxonomy' => 'services-type');
        $service_types = get_terms( $service_args );
      ?>
      <?php foreach ( $service_types as $service_type ) : setup_postdata( $service_type ); ?>
        <div>
        </div>
      <?php endforeach; wp_reset_postdata(); ?> 
      <?php
      ?>
      <div class="resources-fp">
        <h3 class="resources-title-fp">Resources</h3>
        <p class="resources-description-fp"><?php echo $resources->description ?></p>
        <div class="resources-learn-more-fp"><a href="resource">Learn More <span>></span></a></div>
      </div>
      <div class="volunteer-fp">
        <h3 class="volunteer-title-fp">Volunteer Opporunities</h3>
        <p class="volunteer-description-fp"><?php echo CFS()->get( 'volunteer_opportunities' );?></p>
      </div>
    </section>
    <section class="vatjss-home-mobile-subscribe-banner vatjss-vertical-align-center">
      <button>Subscribe</button>
    </section>
  </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>