<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arcade_Direct
 */

get_header();
?>

<div id="pageheader" style="text-align: center;padding: 1rem;background: #EEEEEE;">
	<h1 style="margin: 0;"><?php the_title(); ?></h1>
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p style="margin: 0;font-size: 0.8rem;" id="breadcrumbs">','</p>' );
	}
	?>
</div>

<main id="primary" class="site-main wrap woocommerce">

	<?php if( have_rows('flexible_layout') ): ?>
        <?php while( have_rows('flexible_layout') ): the_row(); ?>

          <?php if( get_row_layout() == 'text_image_button_30%_60%' ):
        
              $image = get_sub_field('image');
              $text = get_sub_field('text');
              $link = get_sub_field('link');
              ?>
              <?php if ( wp_is_mobile() ) : ?>

              <div class="flex-50">

                 <div style="height:200px; background-size: cover;  background-position: center;;background-image: url('<?php echo esc_url($image['sizes']['large']); ?>');" class="image"></div>

                <div class="content">

                   <?php echo $text; ?>
                      <?php 
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>
                  
                </div>

              <?php else : ?>

              <div class="flex-50" style="display: flex;">

                <div class="content" style="flex-basis: 33.3%; padding: 2rem;">

                   <?php echo $text; ?>
                      <?php 
                      $link = get_sub_field('link');
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>
                  
                </div>

                <div style="width: 66.6%; background-size: cover;  background-position: center;;background-image: url('<?php echo esc_url($image['sizes']['large']); ?>');" class="image"></div>

              <?php endif; ?>

              </div>


          <?php elseif( get_row_layout() == 'text_image_50%_standard' ):
              
                $image = get_sub_field('image');
                $text = get_sub_field('text');
                ?>

                <?php if ( wp_is_mobile() ) : ?>

                <div class="row">

                <?php else : ?>

                <div class="row" style="display: flex;">

                <?php endif; ?>

                  <div class="col" style="flex-basis: 50%; padding: 15px;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image['sizes']['medium']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image['sizes']['custom-600']); ?>">
                     <img class="skip-lazy" width="600" height="" src="<?php echo esc_url($image2['sizes']['custom-600']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </picture>
                     
                  </div>

                  <div class="col" style="flex-basis: 50%; padding: 15px; margin-bottom: 2rem;">

                    <?php echo $text; ?>

                  </div>
                  
               </div>

            <?php elseif( get_row_layout() == 'full_width_image' ): 
                $fwimage = get_sub_field('fw_image');
                ?>
                <picture> 
                <source media="(max-width: 599px)" srcset="<?php echo esc_url($fwimage['sizes']['medium']); ?>">
                <source media="(min-width: 600px)" srcset="<?php echo esc_url($fwimage['sizes']['custom-crop-600']); ?>">
               <img class="skip-lazy" width="1024" height="800" src="<?php echo esc_url($fwimage['sizes']['large']); ?>" alt="<?php echo esc_attr($fwimage['alt']); ?>">
              </picture>
              <amp-img width="300" height="186" src="<?php echo esc_url($fwimage['sizes']['medium']); ?>" alt="<?php echo esc_attr($fwimage['alt']); ?>">

            <?php elseif( get_row_layout() == 'image_text_button_50%' ):
              
                $image = get_sub_field('image');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
                $image2 = get_sub_field('image2');
                $text2 = get_sub_field('text2');
                $link2 = get_sub_field('link2');
                ?>

                <?php if ( wp_is_mobile() ) : ?>

                <div class="flex-50 row">

                <?php else : ?>

                <div class="flex-50 row" style="display: flex;">

                <?php endif; ?>

                  <div class="col" style="flex-basis: 50%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image['sizes']['medium']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image['sizes']['custom-crop-600']); ?>">
                     <img class="skip-lazy" width="600" height="255" src="<?php echo esc_url($image['sizes']['custom-crop-600']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </picture>

                    <amp-img width="300" height="186" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                    <div class="content center">

                    	<?php echo $text; ?>
                    	<?php 
          						if( $link ): 
          						    $link_url = $link['url'];
          						    $link_title = $link['title'];
          						    $link_target = $link['target'] ? $link['target'] : '_self';
          						    ?>
          						    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          						<?php endif; ?>

                    </div>

                  </div>


                  <div class="col" style="flex-basis: 50%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image2['sizes']['medium']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image2['sizes']['custom-crop-600']); ?>">
                     <img class="skip-lazy" width="600" height="" src="<?php echo esc_url($image2['sizes']['custom-crop-600']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
                    </picture>
                    <amp-img width="300" height="186" src="<?php echo esc_url($image2['sizes']['medium']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">

                    <div class="content center">

                	<?php echo $text2; ?>
                	<?php 
        					if( $link2 ): 
        					    $link_url = $link2['url'];
        					    $link_title = $link2['title'];
        					    $link_target = $link2['target'] ? $link2['target'] : '_self';
        					    ?>
        					    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        					<?php endif; ?>
                        	
                    </div>
                    
                  </div>
                  
               </div>

            <?php elseif( get_row_layout() == 'image_text_button_33%' ):
              
                $image = get_sub_field('image');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
                $image2 = get_sub_field('image2');
                $text2 = get_sub_field('text2');
                $link2 = get_sub_field('link2');
                $image3 = get_sub_field('image3');
                $text3 = get_sub_field('text3');
                $link3 = get_sub_field('link3');
                ?>

                <?php if ( wp_is_mobile() ) : ?>

                <div class="flex-50 row">

                <?php else : ?>

                <div class="flex-50 row" style="display: flex;">

                <?php endif; ?>

                  <div class="col" style="flex-basis: 33%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image['sizes']['medium']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image['sizes']['custom-crop-600']); ?>">
                     <img class="skip-lazy" width="600" height="" src="<?php echo esc_url($image['sizes']['custom-crop-600']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </picture>

                    <amp-img width="300" height="186" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                    <div class="content center">

                      <?php echo $text; ?>
                      <?php 
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>

                    </div>

                  </div>


                  <div class="col" style="flex-basis: 33%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image2['sizes']['medium']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image2['sizes']['custom-crop-600']); ?>">
                     <img class="skip-lazy" width="600" height="" src="<?php echo esc_url($image2['sizes']['custom-crop-600']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
                    </picture>
                    <amp-img width="300" height="186" src="<?php echo esc_url($image2['sizes']['medium']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">

                    <div class="content center">

                      <?php echo $text2; ?>
                      <?php 
                      if( $link2 ): 
                          $link_url = $link2['url'];
                          $link_title = $link2['title'];
                          $link_target = $link2['target'] ? $link2['target'] : '_self';
                          ?>
                          <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>
                          
                    </div>
                    
                  </div>

                  <div class="col" style="flex-basis: 33%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image3['sizes']['medium']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image3['sizes']['custom-crop-600']); ?>">
                     <img class="skip-lazy" width="600" height="" src="<?php echo esc_url($image3['sizes']['custom-crop-600']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>">
                    </picture>
                    <amp-img width="300" height="186" src="<?php echo esc_url($image3['sizes']['medium']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">

                    <div class="content center">

                      <?php echo $text3; ?>
                      <?php 
                      if( $link3 ): 
                          $link_url = $link3['url'];
                          $link_title = $link3['title'];
                          $link_target = $link3['target'] ? $link3['target'] : '_self';
                          ?>
                          <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>
                          
                    </div>
                    
                  </div>
                  
               </div>


           <?php elseif( get_row_layout() == 'row_4_showcase' ): ?>

             <?php if( have_rows('item') ): ?> 

                <?php if ( wp_is_mobile() ) : ?>

                <div class="row">

                <?php else : ?>

                <div class="row" style="display: flex;flex-wrap: wrap;">

                <?php endif; ?>

                <?php 

                // loop through rows (sub repeater)
                while( have_rows('item') ): the_row();

                  $image = get_sub_field('image');
                  $title = get_sub_field('title');
                  $link = get_sub_field('link');?>

                  <div class="col" style="flex-basis: 25%; padding: 15px; margin-bottom: 2rem;">

                  <?php if( $link ): 
                      $link_url = $link['url'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> <?php endif;  ?>

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image['sizes']['custom-600']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image['sizes']['custom-250x350']); ?>">
                     <img class="skip-lazy" width="600" height="" src="<?php echo esc_url($image['sizes']['custom-600']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </picture> 

                      <?php if( $link ): 
                      $link_url = $link['url'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h3 class="center"><?php echo $title; ?></h3></a>

                       <?php else :  ?>

                      <h3 class="center"><?php echo $title; ?></h3>

					         <?php endif;  ?>
                      

                  </div>

                <?php endwhile; ?>
                </div>
              <?php endif;  ?>


            <?php elseif( get_row_layout() == 'full_width_image' ): 
                $fwimage = get_sub_field('fw_image');
                ?>
                <picture> 
                <source media="(max-width: 599px)" srcset="<?php echo esc_url($fwimage['sizes']['medium']); ?>">
                <source media="(min-width: 600px)" srcset="<?php echo esc_url($fwimage['sizes']['custom-crop-600']); ?>">
               <img class="skip-lazy" width="1024" height="800" src="<?php echo esc_url($fwimage['sizes']['large']); ?>" alt="<?php echo esc_attr($fwimage['alt']); ?>">
              </picture>
              <amp-img width="300" height="186" src="<?php echo esc_url($fwimage['sizes']['medium']); ?>" alt="<?php echo esc_attr($fwimage['alt']); ?>">

            <?php elseif( get_row_layout() == 'full_width_text' ): ?>

               <?php the_sub_field('fw_text'); ?>

            <?php elseif( get_row_layout() == 'product_loop_slider' ): ?>      

              <?php
                $cat_id = get_sub_field('product_cat');
                $args = array(
                  'post_type' => 'product',
                  'posts_per_page' => 15,
                  'tax_query' => array(
                      array(
                          'taxonomy'      => 'product_cat',
                          'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                          'terms'         => $cat_id,
                          'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                      )
                    )
                  );
                $loop = new WP_Query( $args );
                if ($loop->have_posts() ) : ?>
                <div class="productslider" style="margin-bottom: 2rem;">
                <h3><?php echo get_term_by('id', get_sub_field('product_cat')[0], 'product_cat')->name; ?></h3>
                <?php the_sub_field('description'); ?>
                <ul>
                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="col center">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium');?>
                        <div class="detail">
                          <h4 style="margin-bottom: 0;"><?php the_title();?></h4>
                          <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
                          <?php echo $product->get_price_html(); ?>
                        </a>
                      </div>
                    </li>
                  <?php endwhile; ?>
                   </ul><!--/.products-->
                </div>
                  <?php endif; ?>
               <?php wp_reset_postdata(); ?> 
              
            <?php elseif( get_row_layout() == 'product_loop' ): ?>

              
              <?php
                $cat_id = get_sub_field('product_cat');
                $args = array(
                  'post_type' => 'product',
                  'posts_per_page' => 99,
                  'tax_query' => array(
                      array(
                          'taxonomy'      => 'product_cat',
                          'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                          'terms'         => $cat_id,
                          'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                      )
                    )
                  );
                $loop = new WP_Query( $args );
                if ($loop->have_posts() ) : ?>
                <h2 id="skiptoproducts"><?php the_sub_field('title'); ?></h2>
                <div class="productgrid four">      			
      					  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      						<div class="col center" style="margin-bottom: 2rem;">
      						  <a href="<?php the_permalink(); ?>">
      							<?php the_post_thumbnail('medium');?>
      							<div class="detail">
      							  <h3 style="margin-bottom: 0;"><?php the_title();?></h3>
      							  <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
      							  <?php echo $product->get_price_html(); ?>
      							</div>
      						  </a>
      						</div>
      					  <?php endwhile; ?>
                
                  </div>
                  <?php endif; ?>
               <?php wp_reset_postdata(); ?>  


              <?php elseif( get_row_layout() == 'specific_products_loop' ): ?>

                <?php the_sub_field('title'); ?>
                <?php the_sub_field('paragraph'); ?>

                <?php  

                $related_products = get_sub_field( 'spec_products_loop' );

                if ( $related_products ) {
                    global $post; // Necessary.

                    echo '<ul class="products columns-4">';

                    foreach ( $related_products as $post ) : // Must be called $post. 
                        setup_postdata( $post ); 
                        wc_get_template_part( 'content', 'product' );
                      
                    endforeach;

                     echo '</ul>';

                    wp_reset_postdata();
                } 

                ?> 

                
            

            <?php elseif( get_row_layout() == 'categories_loop' ): ?>
              
              <?php
                $cats = get_sub_field('categories');
        				$categories_list = $cats[0]['category'];
        				if (!empty($categories_list)) {
        					$terms = get_terms(array('taxonomy' => 'product_cat', 'include' => $categories_list, 'hide_empty'  => false, 'orderby'  => 'include')); ?>

        					<div class="catsgrid productgrid four">
        				
        						  <?php foreach ( $terms as $term ){ ?>
        							<div class="col center" style="margin-bottom: 2rem;">
        							  <a href="<?php echo get_term_link($term->term_id); ?>">
        								<?php
											$thumb = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
											if ($thumb) {
												echo wp_get_attachment_image($thumb, 'medium');
											}
										  ?>
        								  <div class="detail">
        									  <h3 style="margin-bottom: 0;"><?php echo $term->name;?></h3>
                            				  <p style="margin: 0;"><?php echo get_field('category_sub_text', 'product_cat_'.$term->term_id); /* Custom Field {prices_from} */ ?></p>
        								  </div>
        								</a>
        							</div>
        						  <?php } ?>
        					  
        				  </div>
        				<?php } ?>  



              


             <?php elseif( get_row_layout() == 'strip_banner' ): 

                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                $subtitle = get_sub_field('sub_title');

              ?>

              <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

               <div class="featuredbanner wide" style="background: #081023; margin-bottom: 2rem;">

                  <div class="content">

                    <h2><?php echo $title; ?></h2>

                    <?php echo $subtitle; ?>
                  
                  </div>

                  <div style="background-image: url('<?php echo esc_url($image['sizes']['custom-crop-600']); ?>');" class="image"></div>

                </div>

              </a>


            <?php elseif( get_row_layout() == 'logo_gallery' ):?>

            <?php 
              $images = get_sub_field('gallery');
              $text = get_sub_field('text');
              $size = 'medium'; // (thumbnail, medium, large, full or custom size)

              if( $images ): ?>
              <h2><?php echo $text; ?></h2>
                  <div class="gallery dflex">
                      <?php foreach( $images as $image_id ): ?>
                          <span style="flex-basis: 33.3%;">
                              <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                          </span>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?> 

              
            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <?php if (!is_product_category( array( 'arcade-machine-hire', 'custom-arcade-machines', 'long-term-arcade-machine-hire', 'star-wars-arcade-machines')) ) : ?>

      <?php the_content();?>

    <?php else : ?>

    <?php endif; ?>

</main><!-- #main -->

<?php
get_footer();
