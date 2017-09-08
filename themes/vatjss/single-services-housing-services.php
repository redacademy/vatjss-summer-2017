<?php
/**
 * The template for displaying all single posts.
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="vatjss-container-fluid">
			<div class="vatjss-flex-container-no-wrap">
				<div class="vatjss-flex-item-mobile-30 vatjss-services-sidebar">
					<button><?php $props = CFS()->get_field_info( 'housing_services' ); echo $props['label'];  ?></button>
					<button>Resources</button>
					<button>FAQ</button>
				</div>
				<div class="vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-70">
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</article>
		<?php endwhile; ?>
		</main>
	</div>

<?php get_footer(); ?>
