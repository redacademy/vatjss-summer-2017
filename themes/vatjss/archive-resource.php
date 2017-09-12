<?php
/**
 * The template for displaying archive pages.
 * 
 * Template Name: Resources
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary-resources" class="resources-content-area">
		<main id="main" class="site-main" role="main">
      <div class="vatjss-mobile-resource-toggle-container">
        <div class="housing-toggle resource-toggle-mobile"><h3>Housing<span> Resources</span></h3></div>
        <div class="justice-toggle resource-toggle-mobile"><h3>Justice<span> Resources</span></h3></div>
        <div class="community-toggle resource-toggle-mobile"><h3>Community<span> Resources</span></h3></div>
      </div>
      <div class="vatjss-mobile-accordion">
        <div class="vatjss-resource-desktop-content">
          <?php the_title();
          CFS()->get('subtitle');
          the_content('293'); ?>
        </div> 
        <div class="housing-toggle resource-toggle-desktop"><h3>Housing</h3></div>
        <section class="housing-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'housing'); ?>
        </section>
        <div class="justice-toggle resource-toggle-desktop"><h3>Justice</h3></div>
        <section class="justice-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'justice'); ?>
        </section>
        <div class="community-toggle resource-toggle-desktop"><h3>Community</h3></div>
        <section class="community-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'community'); ?>
        </section>
      </div>
		</main>
	</div>
<?php get_footer(); ?>