<?php
/**
 * Template Name: About Page
 *
 * @package VATJSS_Theme
 */

get_header(); ?>

<div id="primary" class="about-content">
	<main id="main" class="site-main" role="main">
		<header class="entry-header">
			<div class="vatjss-custom-hero">
				<!--get hero banner-->
        <h2 class="vatjss-about">Crime is best viewed as a violate of people and relationships. 
          Conflict that emerges is an opportunity for positive 
          <span class="vatjss-text-uppercase">transformation</span> 
          for the victim, offender, and the community.</h2>
			</div>
		</header>
		<section class="container vatjss-about-content">
			<div class="vatjss-about-category">
				<h2 class="vatjss-story-header">Our Mission</h2>
					<?php echo CFS()->get( 'about_our_mission' ); ?>	
			</div>
			<div class="vatjss-our-vision vatjss-about-category">
				<h2 class="vatjss-story-header">Our Vision</h2>
      	  <?php echo CFS()->get( 'our_vision' ); ?>
			</div>
			<div class="vatjss-about-category">
      	<h2 class="vatjss-story-header">Our Story</h2>
					<?php echo CFS()->get( 'about_our_story' ); ?>	
			</div>
			<div class="vatjss-about-category">
				<h2 class="vatjss-story-header">Funding</h2>
					<?php echo CFS()->get( 'about_funding' ); ?>
			</div>
			<!-- Buttons for Desktop -->
			<div class="vatjss-mission-buttons">
				<div class="vatjss-first">
					<div class="vatjss-mission-button vatjss-all-buttons">
						<a class="vatjss-mission-button-link vatjss-link-header vatjss-text-uppercase" href="#">Mission</a>
					</div>
					<div class="vatjss-story-button vatjss-all-buttons">
						<a class="vatjss-story-button-link vatjss-link-header vatjss-text-uppercase" href="#">Story</a>
					</div>
				</div>
				<div class="vatjss-second">
					<div class="vatjss-vision-button vatjss-all-buttons">
						<a class="vatjss-vision-button-link vatjss-link-header vatjss-text-uppercase" href="#">Vision</a>
					</div>
					<div class="vatjss-funding-button vatjss-all-buttons">
						<a class="vatjss-funding-button-link vatjss-link-header vatjss-text-uppercase" href="#">Funding</a>
					</div>
				</div>
			</div>
    </section>
    <section class="container vatjss-staff-content">
			<!--get staff photo-->
			<div class="vatjss-staff">
      	<h2 class="vatjss-our-staff vatjss-text-uppercase">Our Staff</h2>
				<?php echo CFS()->get( 'our_staff' ); ?>
			</div>
			<div class="vatjss-read-more-button">
				<a class="vatjss-button-link vatjss-text-uppercase">Read more</a>
			</div>
    </section>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>