<?php
/**
 * Template Name: Staff Page
 * The template for displaying archive pages.
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="vatjss-staff-header vatjss-vertical-align-center">
      <p class="vatjss-text-center vatjss-text-uppercase">strengthening resiliency within the aboriginal community</p>
    </div>
    <div class="vatjss-staff-section">
		<?php if ( have_posts() ) : ?>
      
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
      
      <section id="post-<?php the_ID(); ?>" class="vatjss-container">
        <div class="vatjss-flex-container-staff-desktop">
          <header class="entry-header vatjss-flex-container-no-wrap vatjss-flex-item-desktop-30">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="vatjss-flex-item-mobile-40 vatjss-flex-item-desktop-100">
              <div class="vatjss-staff-img"><?php the_post_thumbnail( 'large' ); ?></div>
            </div>
          <?php endif; ?>
            <div class="vatjss-flex-item-mobile-60 vatjss-hidden-desktop">
              <?php the_title( sprintf( '<h2 class="entry-title">' ), '</h2>' ); ?>
              <p><?php echo CFS()->get( 'position' ); ?></p>
              <p><?php echo CFS()->get( 'email' ); ?></p>
              <p><?php echo CFS()->get( 'phone' ); ?></p>
            </div>
          </header>

          <div class="entry-content vatjss-flex-item-desktop-70">
            <div class="vatjss-hidden-mobile">
              <?php the_title( sprintf( '<h2 class="entry-title">' ), '</h2>' ); ?>
              
              <p><?php echo CFS()->get( 'position' ); ?></p>
              <p><?php echo CFS()->get( 'email' ); ?></p>
              <p><?php echo CFS()->get( 'phone' ); ?></p>
            </div>
            <?php the_content(); ?>
          </div>
        
      </section>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
