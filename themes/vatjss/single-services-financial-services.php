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
				<div class="vatjss-container-fluid vatjss-serivce-no-padding">
					<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
						<div class="vatjss-flex-item-desktp-30 vatjss-services-sidebar vatjss-hidden-mobile">
							<div class="vatjss-services-sidebar-btns">
								<button><?php $props = CFS()->get_field_info( 'income_assist' ); echo $props['label'];  ?></button>
								<button><?php $props = CFS()->get_field_info( 'tax_clinic' ); echo $props['label'];  ?></button>
								<button>Resources</button>
								<button>FAQ</button>
							</div>
						</div>
						<div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-70">
							<header class="entry-header">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php endif; ?>
								<div class="vatjss-service-title">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									<?php the_content(); ?>
								</div>
							</header>
							<div class="vatjss-mobile-accordian vatjss-hidden-desktop">
								<button class="accordion-services"><?php $props = CFS()->get_field_info( 'income_assist' ); echo $props['label'];  ?></button>
								<div class="panel">
									<?php echo CFS()->get( 'income_assist' ); ?>
								</div>
								<button class="accordion-services"><?php $props = CFS()->get_field_info( 'tax_clinic' ); echo $props['label'];  ?></button>
								<div class="panel">
									<?php echo CFS()->get( 'tax_clinic' ); ?>
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
									<h3><?php echo $faq->post_title ?></h3>
									<p><?php echo $faq->post_content ?></p>
									<?php endforeach; wp_reset_postdata(); ?>
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
							<div class="vatjss-flex-item-desktop-70">
								<h2><?php $props = CFS()->get_field_info( 'income_assist' ); echo $props['label'];  ?></h2>
								<?php echo CFS()->get( 'income_assist' ); ?>
							</div>
						</div>
					</div>
				</section>
				<section class="vatjss-service-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-70">
								<h2><?php $props = CFS()->get_field_info( 'tax_clinic' ); echo $props['label'];  ?></h2>
								<p><?php echo CFS()->get( 'tax_clinic' ); ?></p>
							</div>
						</div>
					</div>
				</section>
				<section class="vatjss-service-red-maple-background-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-70">
								<h2>Resources</h2>
								<p>We provide a number of resources to help with housing issues. This range from landlord dealings to finding emergency shelters.</p>
								<a href="/resource" class="vatjss-text-uppercase">learn more</a>
							</div>
						</div>
					</div>
				</section>
				<section class="vatjss-service-faq-section">
					<div class="vatjss-container-fluid">
						<div class="vatjss-flex-container-no-wrap vatjss-justify-end">
							<div class="vatjss-flex-item-desktop-70">
								<h2>FAQs</h2>
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
