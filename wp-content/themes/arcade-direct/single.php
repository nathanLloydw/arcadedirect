<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Arcade_Direct
 */

get_header();
?>





	<div id="primary" class="content-area">

		<main class="site-main">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p style="font-size: 0.8rem;" id="breadcrumbs">','</p>' );
			}
			?>

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'arcade-direct' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'arcade-direct' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				$author_id = get_the_author_meta('ID');

				// Get author's display name
				$display_name = get_the_author_meta( 'display_name', $author_id );
				$display_title = get_user_meta( $author_id, 'wpseo_title', true );
				  
				// Get author's biographical information or description
				$user_description = get_the_author_meta( 'user_description', $author_id );
				    
				// Get link to the author archive page
				$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $author_id));
				$linked_in = get_field('linked_in', 'user_'. $author_id );
				$author_badge = get_field('author_badge', 'user_'. $author_id ); ?>

				<div class="author_details">

					<div class="image"><img src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" /></div>

					<div class="content">

						<p class="author_name">About <?php echo $display_title; ?></p>
						<p class="user_description"><?php echo $user_description; ?></p>

						<div class="links">		

							<a href="<?php echo $linked_in['url']; ?>">
								<svg style="width: 20px;fill: #3673c0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
							</a>

							<a href="<?php echo $user_posts; ?>">View all posts by <?php echo $display_name; ?></a>

						</div>
						
					</div>

					<?php 


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	<?php get_sidebar();?>

	</div>

<?php get_footer();?>
