<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vatjss_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( '404' ); ?></h1>
					<div>
						<i class="fa fa-bug" aria-hidden="true"></i>	
					</div>	
				</header><!-- .page-header -->

				<div class="page-content">			
					<p class="vatjss-404-sentence"><?php echo esc_html( 'Sorry!' ); ?></p>
					<p class="vatjss-404-sentence"><?php echo esc_html( 'There has been a bug in the slug.'); ?></p>
				  <p class="vatjss-404-sentence"><?php echo esc_html( 'Check URL again.'); ?></p> 
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->


