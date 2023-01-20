<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arcade_Direct
 */

get_header();
?>

<div id="pageheader" style="text-align: center;padding: 2rem;background: #EEEEEE;">
	<h1 style="margin: 0;"><?php the_archive_title(); ?></h1>
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p style="margin: 0;font-size: 0.8rem;" id="breadcrumbs">','</p>' );
	}
	?>
</div>

<main id="primary" class="site-main"style="display: flex;">

		<div class="inner">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="item-post" id="post-<?php the_ID(); ?>" style="padding-bottom:20px;margin-bottom:20px;border-bottom:1px solid #ccc;">
				<?php the_post_thumbnail('full'); ?>
				<h2 style="margin-bottom: 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
					<?php
					arcade_direct_posted_on();
					arcade_direct_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php the_excerpt(); ?>
			</div>

			<?php endwhile; ?>

			<?php else : ?>

			<?php endif; ?>

		</div>

	<?php get_sidebar();?>

</main><!-- #main -->



<?php get_footer();?>
