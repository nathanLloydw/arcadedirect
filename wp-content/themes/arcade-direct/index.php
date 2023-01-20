<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arcade_Direct
 */

get_header();
?>


<div id="pageheader" style="text-align: center;padding: 1rem;background: #EEEEEE;">
	<h1 style="margin: 0;">Arcade Gaming Blog</h1>
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p style="margin: 0;font-size: 0.8rem;" id="breadcrumbs">','</p>' );
	}
	?>
</div>

<div id="primary" class="content-area">

		<main class="site-main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding-bottom:20px;margin-bottom:20px;border-bottom:1px solid #ccc;">
				<?php the_post_thumbnail('full'); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
					<?php
					arcade_direct_posted_on();
					arcade_direct_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php the_excerpt(); ?>
			</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>
		</main><!-- #main -->

	<?php get_sidebar();?>

	</div>

<?php get_footer();?>

