<?php
/**
 * Template Name: Contact Page
 *
 * @package VATJSS_Theme
 */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <div class="vatjss-map"><?php the_content(); ?> </div>
      <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('large');
        }
        echo '<div>' . CFS()->get( 'address' ) . '</div>';
      ?>

      
    </div><!-- .entry-content -->
  </article><!-- #post-## -->

  <?php endwhile; // End of the loop. ?>
  <element class="vatjss-contact-form">
    <div class="vatjss-hidden-divs-contact">
      <div class="vatjss-contact-form-hide"> <h3> Send Us a Message </h3> </div>
      <div class="vatjss-staff-contact-hide"> <h3> Staff Contact Information </h3> </div>
      <div class="vatjss-volunteer-hide"> <h3> Volunteer Opportunities </h3> </div>
      <div class="vatjss-contact-form-show"> <?php echo CFS()->get( 'contact_form_shortcode' ); ?> </div>
      <div class="vatjss-staff-contact-show"> <!--staff posts--> </div>
      <div class="volunteer-container">
        <div class=volunteer-title">
             <h3>VATJSS is seeking dedicated Community Council Members</h3>
             <h3> Elders strongly encourage to apply °<span class="no">no</span> experience necessary</h3>
        </div>
      <div class="volunteer-requirements">
          <h4 class="volunteer-requirements-title">Volunteer Requirements</h4>      
            <ul>              
              <li>Self-identify as aboriginal  persons 18 and over (Status, Non-status, Inuit, Metis)</li>
              <li>Willing to commit 3–5 hours a month</li>
              <li>Commitment to personal and community wellness</li>
              <li> Complete a Police Information Check (PIC)</li>
            </ul>
      </div>
      <div class ="volunteer-benefits-container">
          <h4 class="volunteer-benefits-title">Volunteer Benefits</h4>
            <ul>
              <li>Provide support to community members using traidtional indigenous healing approaches</li>
              <li>Offer guidance, wisdom, and culture</li>
              <li> Provide input for individual healing plans</li>
              <li>Looks great on your resume</li>
            </ul>
       </div>
      <div class="volunteer-contact">
        <p>If you are committed to empowering our Urban Aboriginal Community through participation in Traditional Aboriginal Justice Process, please contact:</p>
        <p>Victoria Grosse</p>
        <p>(604) 251 – 7200 ext. 175</p>
        <p>circlecoordinator@vatjss.com</p>
      </div>
    </div>
  </element>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
