<?php
/**
 * The template for displaying archive pages.
 * 
 * Template Name: Resources
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="vatjss-mobile-accordian vatjss-hidden-desktop">
        <div class="housing-toggle"><h3>Housing Resources</h3></div>
        <section class="housing-resource-list">
          <?php get_template_part('template-parts/resources', 'housing'); ?>
        </section>
        <div class="justice-toggle"><h3>Justice Resources</h3></div>
        <section class="justice-resource-list">
          <?php get_template_part('template-parts/resources', 'justice'); ?>
        </section>
        <div class="community-toggle"><h3>Community Resources</h3></div>
        <section class="community-resource-list">
          <?php get_template_part('template-parts/resources', 'community'); ?>
        </section>
      </div>
		</main>
	</div>
<?php get_footer(); ?>