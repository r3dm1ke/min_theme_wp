<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package min
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'page does not exist', 'min' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="error-404-subtitle"><?php _e( 'someone possibly made a typo in the link', 'min' ); ?><br>
                    <?php _e('try searching or go to ', 'min'); ?><a href="<? echo get_home_url() ?>">home page</a></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
