<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<div id="splashbox" class="text-center">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->


	<div class="row">
		<div class="col-md-12 d-flex justify-content-center">
			<a href="/contact" class="btn-lg btn-front">Yes I am available for hire</a>
		</div>
	</div>

</article><!-- #post-## -->
</div>