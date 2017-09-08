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
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="vatjss-flex-item-mobile-33">
              <?php the_title( sprintf( '<button class="vatjss-service-btn">'), '</button>' ); ?>
            </div>
            <?php endwhile; ?>
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
          <?php while ( have_posts() ) : the_post(); ?>
            <section id="post-<?php the_ID(); ?>" class="vatjss-services-section vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-33">
              <header class="entry-header">
                <?php the_title( sprintf( '<h2 class="entry-title">'), '</h2>' ); ?>
                <p><?php the_content(); ?></p> 
                <a class="vatjss-service-learn-btn" href="<?php echo get_permalink() ?>">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </header>
            </section>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main>
	</div>
<?php get_footer(); ?>
