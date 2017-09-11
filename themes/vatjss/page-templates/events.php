<?php
/**
 * Template Name: Event Page
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>">
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="vatjss-calendar-events">
          <div class="vatjss-container">
            <div class="vatjss-flex-container-no-wrap">
              <?php the_content(); ?>
            </div>
          </div>
        </section>
        <?php endwhile; // End of the loop. ?>
        <section class="vatjss-community-partner-logo-banner">
          <div class="vatjss-container">
            <h2 class="vatjss-text-center">To see what else is going on in your community, check out these other organizations</h2>
          </div>
        </section>
        <section class="vatjss-community-partner-logo-list">
          <div class="vatjss-container">
              <?php
                $args = array( 
                  'numberposts' =>  -1,
                  'post_type' => 'community_partner'
                );
                $partner_posts = get_posts( $args );
              ?>
            <div class="vatjss-flex-container-no-wrap vatjss-hidden-mobile">
              <?php foreach ( $partner_posts as $key=>$partner ) : setup_postdata( $partner ); ?>
                <div class="vatjss-flex-item-desktop-25">
                  <a href=<?php echo CFS()->get( 'community_partner_link', $partner->ID ); ?>>
                  <img src=<?php echo wp_get_attachment_url( get_post_thumbnail_id( $partner->ID ) )  ?> alt=""/>
                  </a>
                </div>
            <?php if( ($key+1)%4 === 0 && (($key+1) != count($partner_posts)) ){ echo '</div><div class="vatjss-flex-container-no-wrap vatjss-hidden-mobile">'; } ?>
              <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <div class="vatjss-flex-container-no-wrap vatjss-hidden-desktop">
              <?php foreach ( $partner_posts as $key=>$partner ) : setup_postdata( $partner ); ?>
                <div class="vatjss-flex-item-mobile-50">
                  <a href=<?php echo CFS()->get( 'community_partner_link', $partner->ID ); ?>>
                  <img src=<?php echo wp_get_attachment_url( get_post_thumbnail_id( $partner->ID ) )  ?> alt=""/>
                  </a>
                </div>
            <?php if( ($key+1)%2 === 0 && (($key+1) != count($partner_posts)) ){ echo '</div><div class="vatjss-flex-container-no-wrap vatjss-hidden-desktop">'; } ?>
              <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>
        </section>
      </article>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
