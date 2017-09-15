<?php
/**
 * The template for displaying all single posts.
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area vatjss-financial-services">
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
								<?php $props1 = CFS()->get_field_info( 'income_assist' ); ?>
								<a href="#income-assist"><?php echo $props1['label']; ?></a>
								<?php $props2 = CFS()->get_field_info( 'tax_clinic' ); ?>
								<a href="#tax-clinic"> <?php echo esc_html($props2['label']); ?></a>
								<a href='#resource'>Resources</a>
								<a href='#faq'>FAQ</a>
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
									<button class="accordion-services"><?php echo esc_html($props1['label']);?></button>
									<div class="panel">
										<p><?php echo esc_html(CFS()->get( 'income_assist' )); ?></p>
									</div>
									<button class="accordion-services"><?php echo esc_html($props2['label']);  ?></button>
									<div class="panel">
										<?php echo esc_html(CFS()->get( 'tax_clinic' )); ?>
									</div>

									<button class="accordion-services">Resources</button>
									<?php get_template_part( 'template-parts/resources', 'financial' ); ?>

									<button class="accordion-services">FAQ</button>
									<div class="panel">
										<?php
											$args = array( 'post_type' => 'faq', 'orderby' => 'date', 'order' => 'ASC',);
											$faq_posts = get_posts( $args );
										?>
										<?php foreach ( $faq_posts as $faq ) : setup_postdata( $faq ); ?>
										<h3><?php echo esc_html($faq->post_title) ?></h3>
										<p><?php echo esc_html($faq->post_content) ?></p>
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
								<h2 id="income-assist"><?php echo $props1['label'];  ?></h2>
									<p><?php echo esc_html(CFS()->get( 'income_assist' )); ?></p>
							</div>
						</div>
					</div>
				</section>
				<section class="vatjss-service-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
								<h2 id="tax-clinic"><?php echo $props2['label'];  ?></h2>
								<p><?php echo esc_html(CFS()->get( 'tax_clinic' )); ?></p>
							</div>
						</div>
					</div>
				</section>
				<section class="vatjss-service-red-maple-background-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-80">
								<h2 id="resource">Resources</h2>
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
