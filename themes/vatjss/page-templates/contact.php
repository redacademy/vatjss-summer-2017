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
      <section id="post-<?php the_ID(); ?>" class="vatjss-location-map-section">
        <div class="vatjss-container">
          <div class="vatjss-flex-container">
            <div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-50 vatjss-map-section">
              <?php the_content(); ?>
            </div>
            <div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-50 vatjss-no-padding-mobile">
              <div class="vatjss-location-section" style='background-image:url(<?php echo the_post_thumbnail_url(); ?>)'>
                <p><?php echo esc_html(CFS()->get( 'address' )); ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endwhile; ?>
      <section id="vatjss-contact-form-staff-section" class="vatjss-contact-form-staff-section vatjss-hidden-mobile">
        <div class="vatjss-container">
          <div class="tab vatjss-flex-container-no-wrap">
            <div class="vatjss-flex-item-desktop-50"><button class="tablinks active" onclick="openTab(event, 'vatjss-desktop-contact-form-section')">Send a Message</button></div>
            <div class="vatjss-flex-item-desktop-50"><button class="tablinks" onclick="openTab(event, 'vatjss-desktop-staff-section')">Staff Contact</button></div>
          </div>
          <div id="vatjss-desktop-contact-form-section" class="vatjss-desktop-contact-form-section tabcontent" style="display:block;background-color:#971e16;">
            <div class="vatjss-contact-form">
              <h3> Send Us a Message </h3> 
              <?php echo CFS()->get( 'contact_form_shortcode' ); ?> 
            </div>
          </div>
          <div id="vatjss-desktop-staff-section" class="vatjss-desktop-staff-section tabcontent">
            <div class="vatjss-staff-section">
              <?php
                $args = array( 
                  'numberposts' =>  -1,
                  'post_type' => 'staff'
                );
                $staff_posts = get_posts( $args );
              ?>
              <div class="vatjss-flex-container">
              <?php foreach ( $staff_posts as $staff ) : setup_postdata( $staff ); ?>
                <div class="vatjss-flex-item-desktop-50 vatjss-staff-individual">
                  <div class="vatjss-flex-container-no-wrap">
                    <div class="vatjss-flex-item-mobile-30">
                      <img src=<?php echo wp_get_attachment_url( get_post_thumbnail_id( $staff->ID ) )  ?> alt=""/>
                    </div>
                    <div class="vatjss-flex-item-mobile-70">
                      <h4><?php echo $staff->post_title; ?></h4>
                      <p><?php echo esc_html(CFS()->get( 'position', $staff->ID )); ?></p>
                      <p><?php echo esc_html(CFS()->get( 'email', $staff->ID )); ?></p>
                      <p><?php echo esc_html(CFS()->get( 'phone', $staff->ID )); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="vatjss-contact-volunteer-section" class="vatjss-contact-volunteer-section vatjss-hidden-mobile">
        <div class="vatjss-container vatjss-volunteer-container">
          <h3 class="vatjss-text-center">VATJSSis seeking dedicated Community Council Members</h3>
          <h3 class="vatjss-text-center"> Elders strongly encourage to apply no experience necessary</h3>
          <div class="vatjss-flex-container-no-wrap">
            <div class="volunteer-requirements vatjss-flex-item-desktop-50">
                <h4 class="volunteer-requirements-title">Volunteer Requirements</h4>      
                  <ul>              
                    <li>Self-identify as aboriginal  persons 18 and over (Status, Non-status, Inuit, Metis)</li>
                    <li>Willing to commit 3–5 hours a month</li>
                    <li>Commitment to personal and community wellness</li>
                    <li> Complete a Police Information Check (PIC)</li>
                  </ul>
            </div>
            <div class="volunteer-benefits-container vatjss-flex-item-desktop-50">
              <h4 class="volunteer-benefits-title">Volunteer Benefits</h4>
              <ul>
                <li>Provide support to community members using traidtional indigenous healing approaches</li>
                <li>Offer guidance, wisdom, and culture</li>
                <li> Provide input for individual healing plans</li>
                <li>Looks great on your resume</li>
              </ul>
            </div>
          </div>
          <div class="vatjss-flex-container-no-wrap">
            <div class="volunteer-contact vatjss-flex-item-desktop-50">
              <p>If you are committed to empowering our Urban Aboriginal Community through participation in Traditional Aboriginal Justice Process, please contact:</p>
              <p class="volunteer-contact-name">Victoria Grosse</p>
              <p class="volunteer-contact-phone">(604) 251 – 7200 ext. 175</p>
              <p class="volunteer-contact-email">circlecoordinator@vatjss.com</p>
            </div>
            <div class="volunteer-form-contact-page vatjss-flex-item-desktop-50">
              <?php echo CFS()->get( 'volunteer_form' ); ?>
            </div>
          </div>
        </div>
      </section>
      <section id="vatjss-mobile-tab-section" class="vatjss-mobile-tab-section vatjss-hidden-desktop">
        <div class="vatjss-container">
          <div class="tab vatjss-flex-container-no-wrap">
            <button class="tablinks active" onclick="openTab(event, 'vatjss-mobile-contact-form-section')">Send a Message</button>
            <button class="tablinks" onclick="openTab(event, 'vatjss-mobile-staff-section')">Staff Contact</button>
            <button class="tablinks" onclick="openTab(event, 'vatjss-mobile-volunteer-opportunity-section')">Volunteer Opportunities</button>
          </div>
          <div id="vatjss-mobile-contact-form-section" class="tabcontent" style="display:block;">
            <div class="vatjss-contact-form">
              <h3> Send Us a Message </h3> 
              <?php echo CFS()->get( 'contact_form_shortcode' ); ?> 
            </div>
          </div>
          <div id="vatjss-mobile-staff-section" class="tabcontent">
            <div class="vatjss-staff-section">
              <?php
                $args = array( 
                  'numberposts' =>  -1,
                  'post_type' => 'staff'
                );
                $staff_posts = get_posts( $args );
              ?>
              <div class="vatjss-flex-container">
              <?php foreach ( $staff_posts as $staff ) : setup_postdata( $staff ); ?>
                <div class="vatjss-flex-item-mobile-100 vatjss-staff-individual">
                  <div class="vatjss-flex-container-no-wrap">
                    <div class="vatjss-flex-item-mobile-30">
                      <img src=<?php echo wp_get_attachment_url( get_post_thumbnail_id( $staff->ID ) )  ?> alt=""/>
                    </div>
                    <div class="vatjss-flex-item-mobile-70">
                      <h4><?php echo $staff->post_title; ?></h4>
                      <p><?php echo esc_html(CFS()->get( 'position', $staff->ID )); ?></p>
                      <p><?php echo esc_html(CFS()->get( 'email', $staff->ID )); ?></p>
                      <p><?php echo esc_html(CFS()->get( 'phone', $staff->ID )); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
          <div id="vatjss-mobile-volunteer-opportunity-section" class="tabcontent">
            <div class="vatjss-volunteer-container">
              <div class="volunteer-title">
                  <h3 class="vatjss-text-center">VATJSSis seeking dedicated Community Council Members</h3>
                  <h3 class="vatjss-text-center"> Elders strongly encourage to apply no experience necessary</h3>
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
                <p class="volunteer-contact-name">Victoria Grosse</p>
                <p class="volunteer-contact-phone">(604) 251 – 7200 ext. 175</p>
                <p class="volunteer-contact-email">circlecoordinator@vatjss.com</p>
              </div>
              <div class="volunteer-form-contact-page">
                <?php echo CFS()->get( 'volunteer_form' ); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
<?php get_footer(); ?>
