<?php
/**
 * The template for displaying all single posts.
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area vatjss-home-services">
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
								<a href="#housing-services"><?php $props = CFS()->get_field_info( 'housing_services' ); echo $props['label'];  ?></a>
								<a href="#resources">Resources</a>
								<a href="#faq">FAQ</a>
							</div>
						</div>
						<div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-80">
							<header class="entry-header">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php endif; ?>
								<div class="vatjss-service-title">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									<?php the_content(); ?>
								</div>
							</header>
							<div class="vatjss-mobile-accordion vatjss-hidden-desktop">
								<div class="vatjss-service-faq-btns">
									<button class="accordion-services"><?php $props = CFS()->get_field_info( 'housing_services' ); echo $props['label'];  ?></button>
									<div class="panel">
										<?php echo CFS()->get( 'housing_services' ); ?>
									</div>

									<button class="accordion-services">Resources</button>
										<?php get_template_part('template-parts/resources', 'housing'); ?>

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
				<section class="vatjss-service-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
								<h2 id="housing-services"><?php $props = CFS()->get_field_info( 'housing_services' ); echo $props['label'];  ?></h2>
								<?php echo CFS()->get( 'housing_services' ); ?>
							</div>
						</div>
					</div>
				</section>
				<section class="vatjss-service-red-maple-background-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
								<h2 id="resources">Resources</h2>
								<p>We provide a number of resources to help with housing issues. This range from landlord dealings to finding emergency shelters.</p>
								<a href="/resource" class="vatjss-text-uppercase">learn more</a>
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
								<button class="accordion-services"><?php echo $faq->post_title ?></button>
								<div class="panel">
									<p><?php echo $faq->post_content ?></p>
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
