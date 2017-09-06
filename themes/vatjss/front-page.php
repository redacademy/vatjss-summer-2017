<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="vatjss-home-hero">

    </section>
    <section class="vatjss-home-banner">
      <h2>strengthening resiliency within the aboriginal community</h2>
    </section>
    <section>
      <?php
        $service_args = array( 'taxonomy' => 'services-type');
        $service_types = get_terms( $service_args );
      ?>
      <?php foreach ( $service_types as $service_type ) : setup_postdata( $service_type ); ?>
        <div>
          <p><?php echo $service_type->description ?></p>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
      <?php
        $resource_args = array( 'taxonomy' => 'resources-type');
        $resource_types = get_terms( $resource_args );
      ?>
      <?php foreach ( $resource_types as $resource_type ) : setup_postdata( $service_type ); ?>
        <div>
          <p><?php echo $resource_type->description ?></p>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </section>
    <section>
      <button>Subscribe</button>
    </section>
  </main>
</div>


<?php get_footer(); ?>