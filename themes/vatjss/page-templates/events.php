<?php
/**
 * Template Name: Event Page
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>">
        <section class="vatjss-calendar-events">
          <div class="vatjss-container">
            <div class="vatjss-flex-container-no-wrap">
              <div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-60"><?php the_content(); ?></div>
              <div class="vatjss-flex-item-desktop-40 vatjss-hidden-mobile">
                <div class="vatjss-calendar-list-events">
                <?php 
                  $events = tribe_get_events( array(
                    'posts_per_page' => 5,
                  ) );
                  if (empty($events)) {
                    echo "<p class='vatjss-text-center'>There are no upcoming Events</p>";
                  }else{
                    foreach ( $events as $event ) {
                      echo "<div class='vatjss-calendar-list-event'>";
                      echo "<p class='vatjss-calendar-list-event-date'>". date_format(date_create($event->EventStartDate), 'l, F j, Y') ."</p>";
                      echo "<h3 class='vatjss-calendar-list-event-title'>". $event->post_title ."</h3>";
                      echo "<p class='vatjss-calendar-list-event-description'>".$event->post_content."</p>";
                      echo "</div>";
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </section>
      </article>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
