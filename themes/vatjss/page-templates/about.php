<?php
/**
 * Template Name: About Page
 *
 * @package VATJSS_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<header class="entry-header">
					<div class="vatjss-custom-hero">
            <h2 class="vatjss-about">Crime is best viewed as a violate of people and relationships. 
              Conflict that emerges is an opportunity for positive 
              <span class="vatjss-text-uppercase">transformation</span> 
              for the victim, offender, and the community.</h2>
					</div>
				</header>
				<div class="container about-content">
							<h2 class="story-header">Our Story</h2>
							<?php echo CFS()->get( ' ' ); ?>	
							<h2 class="story-header">Our Team</h2>
							<?php echo CFS()->get( ' ' ); ?>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<!-- <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="vatjss-home-hero">

    </section>
    <section class="vatjss-home-banner vatjss-vertical-align-center">
      <h2 class="vatjss-text-uppercase vatjss-text-center">strengthening resiliency within the aboriginal community</h2>
    </section>
    <section class="vatjss-container-fluid">
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

<div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
  <element class='carousel-cell'><p>words</p></element>
  <element class='carousel-cell'><p>have</p></element>
  <element class='carousel-cell'><p>been</p></element>
  <element class='carousel-cell'><p>worded</p></element>
  <element class='carousel-cell'><p>in</p></element>
  <element class='carousel-cell'><p>a</p></element>
  <element class='carousel-cell'><p>very</p></element>
  <element class='carousel-cell'><p>wordy</p></element>
  <element class='carousel-cell'><p>way</p></element>
</div>

      <?php foreach ( $resource_types as $resource_type ) : setup_postdata( $service_type ); ?>
        <div>
          <p><?php echo $resource_type->description ?></p>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </section>
    <section class="vatjss-home-mobile-subscribe-banner vatjss-vertical-align-center">
      <button>Subscribe</button>
    </section>
  </main>
</div> -->


<?php get_footer(); ?>