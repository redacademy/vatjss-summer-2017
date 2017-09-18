<?php
/**
 * Template Name: About Page
 *
 * @package VATJSS_Theme
 */

get_header(); ?>

<div id="primary" class="about-content">
	<main id="main" class="site-main" role="main">
		<div class="vatjss-custom-hero">
				<div class="vatjss-about">
				<!--get hero banner-->
					<p>Crime is best viewed as a violate of people and relationships. 
						Conflict that emerges is an opportunity for positive 
						<span class="vatjss-text-uppercase">transformation</span> 
						for the victim, offender, and the community.
					</p>
				</div>
			</div>
		<section class="container vatjss-about-content">
			<div class="vatjss-about-category">
				<h2 class="vatjss-story-header">Our Mission</h2>
					<p><?php echo esc_html(CFS()->get( 'about_our_mission' )); ?></p>	
			</div>
			<div class="vatjss-our-vision vatjss-about-category">
				<h2 class="vatjss-story-header">Our Vision</h2>
      	  <p><?php echo esc_html(CFS()->get( 'our_vision' )); ?></p>
			</div>
			<div class="vatjss-about-category">
      	<h2 class="vatjss-story-header">Our Story</h2>
					<p><?php echo esc_html(CFS()->get( 'about_our_story' )); ?></p>	
			</div>
			<div class="vatjss-about-category">
				<h2 class="vatjss-story-header">Funding</h2>
					<p><?php echo esc_html(CFS()->get( 'about_funding' )); ?></p>
			</div>
			<!-- Buttons for Desktop -->
			<div class="vatjss-mission-buttons container">
				<div class="vatjss-first">
					<div class="vatjss-hover vatjss-all-buttons">
						<h2 class="vatjss-hover-title vatjss-text-uppercase">Mission</h2>
						<p><?php echo esc_html(CFS()->get( 'about_our_mission' )); ?></p>
					</div>
					<div class="vatjss-hover vatjss-all-buttons">
						<h2 class="vatjss-hover-title vatjss-text-uppercase">Story</h2>
						<p><?php echo esc_html(CFS()->get( 'our_vision' )); ?></p>
					</div>
				</div>
				<div class="vatjss-second">
					<div class="vatjss-hover vatjss-all-buttons">
						<h2 class=" vatjss-hover-title vatjss-text-uppercase">Vision</h2>
						<p><?php echo esc_html(CFS()->get( 'about_our_story' )); ?></p>	
					</div>
					<div class="vatjss-hover vatjss-all-buttons">
						<h2 class="vatjss-hover-title vatjss-text-uppercase">Funding</h2>
						<p><?php echo esc_html(CFS()->get( 'about_funding' )); ?></p>
					</div>
				</div>
			</div>
    </section>
    <section class="container vatjss-staff-content">
			<!--get staff photo-->
			<div class="vatjss-staff">
				<div class="vatjss-staff-img"></div>
				<div class="vatjss-staff-parag">
					<h2 class="vatjss-our-staff vatjss-text-uppercase">Our Staff</h2>
					<p><?php echo esc_html(CFS()->get( 'our_staff' )); ?></p>
					<div class="vatjss-read-more-button">
						<a href="staff" class="vatjss-button-link vatjss-text-uppercase">Read more<span class="vatjss-right-arrow">></span></a>
				</div>
				</div>
			</div>
    </section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('footer-widget'); ?>
<?php get_footer(); ?>