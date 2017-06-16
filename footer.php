<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<div class="row">
							<div class="col-sm-12 text-center">
								&copy 2017 Marco Payumo
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="social-items d-flex flex-row justify-content-center">
									<div class="p-2"><a href="https://www.facebook.com/profile.php?id=564000173"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></div>
									<div class="p-2"><a href="https://www.linkedin.com/in/marco-payumo-78622351/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></div>									
									<div class="p-2"><a href="http://github.com/mxp83"><i class="fa fa-github-square" aria-hidden="true"></i></a></div>
								</div>
							</div>
						</div>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>

