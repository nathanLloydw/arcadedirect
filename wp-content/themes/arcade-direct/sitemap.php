<?php

/*
 Template Name: Sitemap
*/

get_header();
?>

<main id="primary" class="site-main">

	<h1><?php the_title(); ?></h1>

	<div class="wrap">

		<div class="item">
           <h2>Pages</h2>
           <ul style="padding:0">
              <?php wp_list_pages('depth=0&sort_column=post_title&title_li=' ); ?>
            </ul>
        </div>

        <div class="item">
            <h2>Category Archives</h2>
            <ul style="padding:0">
              <?php wp_list_categories( array( 'feed' => esc_html__( 'RSS', 'arcade-direct' ), 'show_count' => true, 'use_desc_for_title' => false, 'title_li' => false ) ); ?>
            </ul>
     
        </div> 

        <div class="item">
            <h2>Product Categories</h2>
            <?php  $args = array( 'hide_empty=0' );
 
              $terms = get_terms( 'product_cat', $args );
              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                  $count = count( $terms );
                  $i = 0;
                  $term_list = '<ul style="padding:0">';
                  foreach ( $terms as $term ) {
                      $i++;
                      $term_list .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
                      if ( $count != $i ) {
                       
                      }
                      else {
                          $term_list .= '</ul>';
                      }
                  }
                  echo $term_list;
                  }?>
          
        </div>

        <div class="item">
            <h2>Blog Posts</h2>
            <ul style="padding:0"><?php $archivesquery = new WP_Query('showposts=20');

  				    while ($archivesquery->have_posts()) : $archivesquery->the_post(); ?>
                <li><a href="<?php esc_url(the_permalink()) ?>"  rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>

            </ul>

          </div>



		      <?php foreach(wp_get_nav_menu_items(96) as $item) {
    			if ($item->type == 'taxonomy') {?>
				  <div class="item">
				 
					<h2><?php echo $item->title; ?></h2>

					<ul style="padding:0">
					  <?php 
		
						$archivesquery = new WP_Query(
							array(
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => $item->object,
										'field'    => 'id',
										'terms'    => $item->object_id,
									),
							)
						));
		
  						while ($archivesquery->have_posts()) : $archivesquery->the_post(); ?>
                  <li><a href="<?php esc_url(the_permalink()) ?>"  rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
  					</ul>

				</div>
	            <?php }
		  } ?>        

		</div>
		

	</main><!-- #main -->

<?php

get_footer();
