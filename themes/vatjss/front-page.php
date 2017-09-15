<?php
/**
 * Template Name: Front Page
 * @package VATJSS_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="vatjss-home-hero">
        <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": false }'>
          <?php
            $carousel_articles = CFS()->get( 'front_page_carousel_items' );
            foreach ($carousel_articles as $article) :
          ?>
          <div class="carousel-cell">
            <h3 class="carousel-title vatjss-text-uppercase"><?php echo $article['front_page_carousel_Item_title'] ?></h3>
            <p class="carousel-content"><?php echo $article['front_page_carousel_item_content'] ?></p>
            <a class="vatjss-carousel-button vatjss-text-uppercase" href="<?php echo $article['front_page_carousel_link'] ?>">Learn More</a>
          </div>
          <?php endforeach; ?>
      </div>
    </section>
    <section class="vatjss-home-banner">
      <div class="vatjss-container">
        <div class="vatjss-flex-container">
          <div class="vatjss-flex-item-desktop-70">
            <h2 class="vatjss-text-uppercase vatjss-text-center"><?php echo CFS()->get( 'volunteer_opportunities' ); ?></h2>
          </div>
          <div class="vatjss-flex-item-desktop-30 vatjss-hidden-mobile">
            <div class="volunteer-learn-more-fp"><a href="contact-us">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="vatjss-home-services-section">
      <div class="vatjss-container-fluid">
        <div class="vatjss-flex-container">
          <?php
            $service_types = get_terms( 'services-type' );
            $housing = $service_types[1];

            $args_service = array( 'post_type' => 'services');
            $service_post = get_posts( $args_service );
          ?>
          <div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-33">
            <div class="vatjss-home-service-mobile-image vatjss-hidden-desktop">
            <?php
              foreach ( $service_post as $post ) : setup_postdata( $post );
                if($post->ID === 113){
                  echo the_post_thumbnail( 'full' );
                }
              endforeach; wp_reset_postdata();
            ?>
            </div>
            <div class="housing-services-fp">
              <?php
                foreach ( $service_post as $post ) : setup_postdata( $post );
                  if($post->ID === 113){
                    echo '<img class="vatjss-home-service-icons vatjss-hidden-mobile" src="'. CFS()->get( 'icon' ) .'"/>';
                  }
                endforeach; wp_reset_postdata();
              ?>
              <h3 class="housing-title-fp">Housing Services</h3>
              <p class="housing-description-fp vatjss-hidden-desktop"><?php echo $housing->description ?></p>
              <div class="housing-learn-more-fp"><a href="services/housing-services">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
          <?php $justice = $service_types[2]; ?>
          <div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-33">
            <div class="vatjss-home-service-mobile-image vatjss-hidden-desktop">
            <?php
              foreach ( $service_post as $post ) : setup_postdata( $post );
                if($post->ID === 103){
                  echo the_post_thumbnail( 'full' );
                }
              endforeach; wp_reset_postdata();
            ?>
            </div>
            <div class="justice-services-fp">
              <?php
                foreach ( $service_post as $post ) : setup_postdata( $post );
                  if($post->ID === 103){
                    echo '<img class="vatjss-home-service-icons vatjss-hidden-mobile" src="'. CFS()->get( 'icon' ) .'"/>';
                  }
                endforeach; wp_reset_postdata();
              ?>
              <h3 class="justice-title-fp">Transformative Justice Services</h3>
              <p class="justice-description-fp vatjss-hidden-desktop"><?php echo $justice->description ?></p>
              <div class="justice-learn-more-fp"><a href="services/justice-services">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
          <?php
            $resources_category = get_categories( 'resources=types' );
            $resources = $resources_category[0];
          ?>
          <div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-33">
            <div class="vatjss-home-service-mobile-image vatjss-hidden-desktop">
            <?php
              foreach ( $service_post as $post ) : setup_postdata( $post );
                if($post->ID === 114){
                  echo the_post_thumbnail( 'full' );
                }
              endforeach; wp_reset_postdata();
            ?>
            </div>
            <div class="resources-fp">
              <img class="vatjss-home-service-icons vatjss-hidden-mobile" src=<?php echo get_stylesheet_directory_uri(); ?>/images/resources.png />
              <h3 class="resources-title-fp">Resources</h3>
              <p class="resources-description-fp vatjss-hidden-desktop"><?php echo $resources->description ?></p>
              <div class="resources-learn-more-fp"><a href="resource">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
          <div class="vatjss-flex-item-mobile-100 vatjss-hidden-desktop">
            <div class="vatjss-home-service-mobile-image vatjss-hidden-desktop">
            <img src=<?php echo get_stylesheet_directory_uri(); ?>/images/ruth-jenna-hands.png alt="ruth-jenna-hands">
            </div>
            <div class="volunteer-fp">
              <h3 class="volunteer-title-fp">Volunteer Opportunities</h3>
              <p class="volunteer-description-fp"><?php echo CFS()->get( 'volunteer_opportunities' ); ?></p>
              <div class="volunteer-learn-more-fp"><a href="contact-us">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="vatjss-home-mobile-subscribe-banner vatjss-vertical-align-center">
      <button class="subscribe">Subscribe</button>
      <div class="on-subscribe"><?php get_sidebar('footer-widget'); ?></div>
    </section>
  </main>
</div>
<?php get_sidebar('footer-widget'); ?>
<?php get_footer(); ?>