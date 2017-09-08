<?php
/**
 * The template for displaying archive pages.
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>
      <?php
        $service_types = get_terms( 'services-type' );
      ?>
      <section class="vatjss-service-hero">
        <div class="vatjss-container">
          <div class="vatjss-flex-container-no-wrap vatjss-btn-section vatjss-hidden-desktop">
            <?php foreach ( $service_types as $service_type ) : setup_postdata( $service_type ); ?>
            <div class="vatjss-flex-item-mobile-33">
              <button class="vatjss-service-btn"><?php echo $service_type->name ?> Services</button>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <h1 class="vatjss-text-center">Services for Youth and Adults</h1>
        </div>
      </section>
      <?php
        $service_types = get_terms( 'services-type' );
      ?>
      <div class="vatjss-services-section-container">
        <div class="vatjss-container">
          <div class="vatjss-flex-container-no-wrap">
          <?php foreach ( $service_types as $service_type ) : setup_postdata( $service_type ); ?>
            <section id="post-<?php the_ID(); ?>" class="vatjss-services-section vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-33">
              <header class="entry-header">
                <h2><?php echo $service_type->name ?> Services</h2>
                <p><?php echo $service_type->description ?></p> 
                <a class="vatjss-service-learn-btn" href="<?php echo get_term_link($service_type) ?>">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </header>
            </section>
          <?php endforeach; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main>
	</div>
<?php get_footer(); ?>
