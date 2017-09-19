<?php
/**
 * The template for displaying all single posts.
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area vatjss-justice-services">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>">
			<div class="vatjss-service-hero">
				<div class="vatjss-flex-container-no-wrap vatjss-btn-section vatjss-hidden-desktop">
					<?php 
						$args = array( 'post_type' => 'services');
						$service_page = get_posts( $args );
					?>
					<?php foreach ( $service_page as $post ) : setup_postdata( $post ); ?>
						<div class="vatjss-flex-item-mobile-33">
							<?php the_title( sprintf( '<a class="vatjss-service-btn" href="%s">', esc_url( get_permalink() )), '</a>' ); ?>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<div class="vatjss-container-fluid vatjss-serivce-no-padding">
					<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
						<div class="vatjss-flex-item-desktop-20 vatjss-services-sidebar vatjss-hidden-mobile">
              <div class="vatjss-services-sidebar-btns">
                <a href="#alternative-measures"><?php $props = CFS()->get_field_info( 'alternative_measures_adults1' ); echo esc_html($props['label']);  ?></a>
                <a href="#extrajudicial-sanctions"><?php $props = CFS()->get_field_info( 'extrajudicial_sancition' ); echo esc_html($props['label']);  ?></a>
                <a href="#resources">Resources</a>
                <a href="#faq">FAQ</a>
              </div>
						</div>
						<div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-80">
							<header class="entry-header vatjss-flex-container-no-wrap">
								<div class="vatjss-service-title vatjss-flex-item-desktop-40">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									<?php the_content(); ?>
                </div>
                <div id="vatjss-justice-service-carousel" class="vatjss-justice-service-carousel vatjss-flex-item-desktop-60">
                  <div class="vatjss-carousel-background"></div>
                  <ul class='circle-container'>
                    <li><button value="1">1</button></li>
                    <li><button value="2">2</button></li>
                    <li><button value="3">3</button></li>
                    <li><button value="4">4</button></li>
                    <li><button value="5">5</button></li>
                    <li><button value="6">6</button></li>
                    <li><button value="7">7</button></li>
                  </ul>
                  <div class="vatjss-justice-service-steps vatjss-vertical-align-center">
                    <p id="vatjss-justice-service-step-1" class="vatjss-justice-service-step vatjss-text-center active">Referral from Crown Counsel/VPD/Probation</p>
                    <p id="vatjss-justice-service-step-2" class="vatjss-justice-service-step vatjss-text-center">First Meeting</p>
                    <p id="vatjss-justice-service-step-3" class="vatjss-justice-service-step vatjss-text-center">Second Meeting</p>
                    <p id="vatjss-justice-service-step-4" class="vatjss-justice-service-step vatjss-text-center">Third Meeting</p>
                    <p id="vatjss-justice-service-step-5" class="vatjss-justice-service-step vatjss-text-center">Community Council Forum</p>
                    <p id="vatjss-justice-service-step-6" class="vatjss-justice-service-step vatjss-text-center">Follow-up</p>
                    <p id="vatjss-justice-service-step-7" class="vatjss-justice-service-step vatjss-text-center">Compliance/Non-compliance</p>
                  </div>
                </div>
							</header>
							<div class="vatjss-mobile-accordion vatjss-hidden-desktop">
								<div class="vatjss-service-faq-btns">
									<button class="accordion-services">Restorative Justice</button>
									<div class="panel">
										<p>
											Restorative justice process focuses on repairing relationships among those affected by crime - the victim, the offender, 
											their families and the community - and to empower individuals to formulate appropriate responses and strategies
											to deal with the crime and participate directly in processes that affect the overall well-being of the community.
										</p>
									</div>
									
									<button class="accordion-services"><?php $props = CFS()->get_field_info( 'alternative_measures_adults1' ); echo esc_html($props['label']);  ?></button>
									<div class="panel">
										<?php echo esc_html(CFS()->get( 'alternative_measures_adults1' )); ?>
									</div>
									<button class="accordion-services"><?php $props = CFS()->get_field_info( 'extrajudicial_sancition' ); echo esc_html($props['label']);  ?></button>
									<div class="panel">
										<?php echo esc_html(CFS()->get( 'extrajudicial_sancition' )); ?>
									</div>

									<button class="accordion-services">Resources</button>
										<?php get_template_part('template-parts/resources', 'justice'); ?>

									<button class="accordion-services">FAQ</button>
									<div class="panel">
										<?php
											$args = array( 'post_type' => 'faq', 'orderby' => 'date', 'order' => 'ASC',);
											$faq_posts = get_posts( $args );
										?>
										<?php foreach ( $faq_posts as $faq ) : setup_postdata( $faq ); ?>
										<h3><?php echo $faq->post_title ?></h3>
										<p><?php echo $faq->post_content ?></p>
										<?php endforeach; wp_reset_postdata(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="entry-content vatjss-hidden-mobile">
				<section class="vatjss-service-red-maple-background-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
								<h2>Restorative Justice</h2>
								<p>
                  Restorative justice process focuses on repairing relationships among those affected by crime - the victim, the offender, 
                  their families and the community - and to empower individuals to formulate appropriate responses and strategies
                  to deal with the crime and participate directly in processes that affect the overall well-being of the community.
                </p>
							</div>
						</div>
					</div>
        </section>
        <section class="vatjss-service-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
								<h2 id="alternative-measures"><?php $props = CFS()->get_field_info( 'alternative_measures_adults' ); echo esc_html($props['label']);  ?></h2>
								<p><?php echo esc_html(CFS()->get( 'alternative_measures_adults1' )); ?></p>
								<p><?php echo esc_html(CFS()->get( 'alternative_measures_adults2' )); ?></p>
								<?php echo CFS()->get( 'alternative_measures_video' ); ?>
							</div>
						</div>
					</div>
        </section>
        <section class="vatjss-service-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
								<h2 id="extrajudicial-sanctions"><?php $props = CFS()->get_field_info( 'extrajudicial_sancition' ); echo esc_html($props['label']);  ?></h2>
								<p><?php echo esc_html(CFS()->get( 'extrajudicial_sancition' )); ?></p>
								<?php echo CFS()->get( 'extrajudicial_sanctions_video' ); ?>
							</div>
						</div>
					</div>
        </section>
        <section class="vatjss-service-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
                <h2 id="resources">Resources</h2>
                <p>We provide a number of resources to help with housing issues. This range from landlord dealings to finding emergency shelters.</p>
                <a href="/vatjss/resource" class="vatjss-service-justice-resource-btn vatjss-text-uppercase">learn more</a>
							</div>
						</div>
					</div>
        </section>
				<section class="vatjss-service-faq-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80 vatjss-service-faq-btns">
								<h2 id="faq">FAQs</h2>
							<?php
								$args = array( 'post_type' => 'faq', 'orderby' => 'date', 'order' => 'ASC',);
								$faq_posts = get_posts( $args );
							?>
							<?php foreach ( $faq_posts as $faq ) : setup_postdata( $faq ); ?>
								<button class="accordion-services"><?php echo esc_html($faq->post_title) ?></button>
								<div class="panel">
									<p><?php echo esc_html($faq->post_content) ?></p>
								</div>
							<?php endforeach; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</article>
		<?php endwhile; ?>
		</main>
	</div>
<?php get_footer(); ?>
