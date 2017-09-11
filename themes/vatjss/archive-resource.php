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
        <div class="housing-toggle resource-toggle"><h3>Housing Resources</h3></div>
        <div class="justice-toggle resource-toggle"><h3>Justice Resources</h3></div>
        <div class="community-toggle resource-toggle"><h3>Community Resources</h3></div>
      </div>
      <div class="vatjss-mobile-accordian">
        <div class="housing-toggle resource-toggle"><h3>Housing Resources</h3></div>
        <section class="housing-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'housing'); ?>
        </section>
        <div class="justice-toggle resource-toggle"><h3>Justice Resources</h3></div>
        <section class="justice-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'justice'); ?>
        </section>
        <div class="community-toggle resource-toggle"><h3>Community Resources</h3></div>
        <section class="community-resource-list resource-list-page">
          <?php get_template_part('template-parts/resources', 'community'); ?>
        </section>
      </div>
		</main>
	</div>
<?php get_footer(); ?>