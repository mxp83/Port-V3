<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying front page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper text-center" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'front-page' ); ?>
						

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

		<div id="expertise" class="title-row row">
			<div class="col-md-12">
				<h3 class="entry-title">My Skills</h3>
				<p>I am a Full-Stack Trades-of-All Jack.</p>
			</div>
		</div>
		<div class="row">
			<div class="skillbox col-sm-12 col-md-4">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				<h4 class="entry-title">Website Design</h4>
				<p>I can help build your website from beginning, middle or end.  Using industry standard applications I can help you or your company realize your online potential.</p>
			</div>
			<div class="skillbox col-sm-12 col-md-4">
				<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
				<h4 class="entry-title">Brainstorming Ideas</h4>
				<p>There is no I in team.  I collaborate with your team and help build your website with a vision of what you and your group would like to achieve through discussion and planning.</p>
			</div>
			<div class="skillbox col-sm-12 col-md-4">
				<i class="fa fa-code" aria-hidden="true"></i>
				<h4 class="entry-title">Code Crunching</h4>
				<p>I build my websites in responsive HTML5 and CSS3.  I can build your website from scratch, or if you like, build it from current frameworks like Foundation and Bootstrap.  I can also create Wordpress Templates.</p>
			</div>
		</div>
		
	</div><!-- Container end -->

</div><!-- Wrapper end -->
	<div id="view_projects" class="container-fluid">
		<div id="projects_title" class="title-row row">
			<div class="col-md-12">
				<h3 class="entry-title">My Projects</h3>
				<p>See some of the work I've been a part of.</p>
				<p><a href="/projects" class="btn-lg btn-front">Check it out</a></p>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
