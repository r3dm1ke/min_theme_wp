<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package min
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				min_posted_on();
				min_posted_by();
				min_tags_list();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php min_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        if (is_singular() || !has_excerpt()) {
	        the_content( sprintf(
		        wp_kses(
		        /* translators: %s: Name of current post. Only visible to screen readers */
			        __( 'read more<span class="screen-reader-text"> "%s"</span>', 'min' ),
			        array(
				        'span' => array(
					        'class' => array(),
				        ),
			        )
		        ),
		        get_the_title()
	        ) );
        } else {
	        the_excerpt();
	        min_the_excerpt_more_link();
	        wp_link_pages( array(
		        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'min' ),
		        'after'  => '</div>',
	        ) );
        }
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php min_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
