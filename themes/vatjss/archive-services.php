<?php
/**
 * The template for displaying archive pages.
 *
 * Template Name: Services
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) : ?>
      <?php
        $args = array( 'post_type' => 'page', 'post__in' => array(379) );
        $service_page = get_posts( $args );
      ?>
      <section class="vatjss-service-hero">
        <div class="vatjss-container">
          <div class="vatjss-flex-container-no-wrap vatjss-btn-section vatjss-hidden-desktop">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="vatjss-flex-item-mobile-33">
              <?php the_title( sprintf( '<a class="vatjss-service-btn" href="%s">', esc_url( get_permalink() )), '</a>' ); ?>
            </div>
            <?php endwhile; ?>
          </div>
          <h1 class="vatjss-text-center">Services for Youth and Adults</h1>
          <?php
            foreach ( $service_page as $post ) : setup_postdata( $post );
              the_content();
              if ( has_post_thumbnail() ){
                the_post_thumbnail( 'large' );
              }
              echo '<div class="vatjss-hidden-mobile"><h2>Is this for me?</h2><p>'.esc_html(CFS()->get( 'is_this_for' )).'</p></div>';
            endforeach; wp_reset_postdata();
          ?>
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
              <div class="vatjss-service-mobile-image vatjss-hidden-desktop" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);"></div>
              <header class="entry-header">
                <img class="vatjss-service-icons vatjss-hidden-mobile" alt="Services icon" src=<?php echo esc_html(CFS()->get( 'icon' )); ?> />
                <?php the_title( sprintf( '<h2 class="entry-title">'), '</h2>' ); ?>
                <div class="vatjss-hidden-desktop"><?php the_content(); ?></div> 
                <a class="vatjss-service-learn-btn" href="<?php echo get_permalink() ?>">Learn More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
