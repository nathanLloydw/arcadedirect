<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

	$parent_term = get_queried_object();
?>
<div id="pageheader" style="text-align: center;padding: 1rem;background: #EEEEEE;">
	<h1 style="margin: 0;"><?php echo $parent_term->name; ?></h1>
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  //yoast_breadcrumb( '<p style="margin: 0;font-size: 0.8rem;" id="breadcrumbs">','</p>' );
	}
	?>
</div>

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
do_action( 'woocommerce_before_main_content' );

?>
<?php /*<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	do_action( 'woocommerce_archive_description' );
	?>
</header>*/ ?>

<?php
	if( have_rows('flexible_layout', $parent_term) ): ?>
        <?php while( have_rows('flexible_layout', $parent_term) ): the_row(); ?>

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

                <div class="flex-50 row">

                <?php else : ?>

                <div class="flex-50 row" style="display: flex;">

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
                      if( $link ): 
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

                <?php 
                $terms = get_sub_field('product_cat');
                if( $terms ): ?>
                    
                    <?php foreach( $terms as $term ): ?>
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                          <h3><?php echo get_term_by('id', get_sub_field('product_cat')[0], 'product_cat')->name; ?></h3>
                        </a>
                    <?php endforeach; ?>
                   
                <?php endif; ?>


                

                <?php the_sub_field('description'); ?>
                <ul>
                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="col center">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium');?>
                        <div class="detail">
                          <h4 style="margin-bottom: 0;"><?php the_title();?></h4>
                          <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
                          <p style="margin: 0;"><?php echo $product->get_price_html(); ?></p>
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



              <?php elseif( get_row_layout() == 'specific_product_showcase' ): ?>

                 <?php if ( wp_is_mobile() ) : ?>

                <div class="flex-50 row">

                <?php else : ?>

                <div class="flex-50 row" style="display: flex;">

                <?php endif; ?>

                  <div class="col" style="flex-basis: 50%; padding: 15px;">

                    <?php
                    $product = get_sub_field('spec_product');
                    if( $product ): 
                        $permalink = get_permalink( $product );
                        $title = get_the_title( $product );
                        $price = get_post_meta( get_the_ID(), '_regular_price', true);
                        $currency = get_woocommerce_currency_symbol();
                      ?>
                       <div class="product col center" style="margin-bottom: 2rem;">
                          <a href="<?php echo esc_url( $permalink ); ?>"><?php echo get_the_post_thumbnail($product,'full');?></a>
                          <div class="detail">
                           <a href="<?php echo esc_url( $permalink ); ?>"> <h3 style="margin-bottom: 0;"><?php echo esc_html( $title ); ?></h3></a>
                             <span class="price" style="margin: 0;"><?php echo $currency; echo $price; ?> Exl VAT</span>
                          </div>
                          </a>
                        </div>
                    <?php endif; ?>

                  </div>

                  <div class="col" style="flex-basis: 50%; padding: 15px; margin-bottom: 2rem;">

                    <?php the_sub_field('paragraph'); ?>

                  </div>

             </div>


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




              <?php elseif( get_row_layout() == 'faq_block' ): ?>

                <?php if (have_rows('faq')) : ?>

                <div class="faq-wrapper">

                <?php while (have_rows('faq')) : the_row(); ?>

                  <h3><?php the_sub_field('name'); ?> (<?php echo count(get_sub_field('faq_section')); ?>)</h3>

                  <?php if (have_rows('faq_section')): ?>

                  <ul class="accordion" data-accordion data-allow-all-closed="true">
                    <?php while (have_rows('faq_section')): the_row(); ?>
                      <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title yantramanav bold"><?php the_sub_field('question'); ?></a>
                        <div class="accordion-content yantramanav light" data-tab-content>
                        <?php the_sub_field('answer'); ?>
                        </div>
                      </li>
                    <?php endwhile; ?>
                  </ul>

                <?php endif; ?>

                <?php endwhile; ?>

                <?php 
                  
                  global $schema;

                  $schema = array(
                  '@context'   => "https://schema.org",
                  '@type'      => "FAQPage",
                  'mainEntity' => array()
                  );

                  if ( have_rows('faq') ) {

                  while ( have_rows('faq') ) : the_row();

                    if ( have_rows('faq_section') ) {

                      while ( have_rows('faq_section') ) : the_row();

                        $questions = array(
                          '@type'          => 'Question',
                          'name'           => get_sub_field('question'),
                          'acceptedAnswer' => array(
                          '@type' => "Answer",
                          'text' => get_sub_field('answer')
                            )
                            );

                            array_push($schema['mainEntity'], $questions);

                      endwhile;

                    }

                  endwhile;


                  function generate_faq_schema ($schema) {

                    global $schema;

                    echo '<!-- Auto generated FAQ Structured data --><script type="application/ld+json">'. json_encode($schema) .'</script>';

                  }

                  add_action( 'wp_footer', 'generate_faq_schema', 100 );


                }

                ?>

              </div>

              <?php endif; ?> <!-- endif have_rows('faq'); -->


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


            <?php elseif( get_row_layout() == 'testimonials' ):

                $image = get_sub_field('image');
                $text = get_sub_field('text');
                
                $image2 = get_sub_field('image2');
                $text2 = get_sub_field('text2');
              
                $image3 = get_sub_field('image3');
                $text3 = get_sub_field('text3');
               
                ?>

                <?php if ( wp_is_mobile() ) : ?>

                <div class="testimonials row">

                <?php else : ?>

                <div class="testimonials row" style="display: flex;">

                <?php endif; ?>

                  <div class="col" style="flex-basis: 33%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?>">
                     <img class="skip-lazy" width="150" height="150" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </picture>

                    <amp-img width="150" height="150" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                    <div class="content">

                      <?php echo $text; ?>

                    </div>

                  </div>


                  <div class="col" style="flex-basis: 33%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image2['sizes']['thumbnail']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image2['sizes']['thumbnail']); ?>">
                     <img class="skip-lazy" width="150" height="" src="<?php echo esc_url($image2['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
                    </picture>
                    <amp-img width="150" height="150" src="<?php echo esc_url($image2['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">

                    <div class="content">

                      <?php echo $text2; ?>
                     
                    </div>
                    
                  </div>

                  <div class="col" style="flex-basis: 33%; padding: 15px; margin-bottom: 2rem;">

                    <picture> 
                      <source media="(max-width: 599px)" srcset="<?php echo esc_url($image3['sizes']['thumbnail']); ?>">
                      <source media="(min-width: 600px)" srcset="<?php echo esc_url($image3['sizes']['thumbnail']); ?>">
                     <img class="skip-lazy" width="150" height="" src="<?php echo esc_url($image3['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>">
                    </picture>
                    <amp-img width="300" height="150" src="<?php echo esc_url($image3['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">

                    <div class="content">

                      <?php echo $text3; ?>
                      
                    </div>
                    
                  </div>
                  
               </div>

              
            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <?php if (!is_product_category( array( 'arcade-machine-hire', 'arcade-games-for-sale', 'multi-games-tables','custom-arcade-machines', 'long-term-arcade-machine-hire', 'dance-machine-hire', 'star-wars-arcade-machines')) ) : ?>

		<?php
		if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action( 'woocommerce_before_shop_loop' );

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}
		?>

    <?php
    /**
     * Hook: woocommerce_archive_description.
     *
     * @hooked woocommerce_taxonomy_archive_description - 10
     * @hooked woocommerce_product_archive_description - 10
     */
    do_action( 'woocommerce_archive_description' );
    ?>
<?php endif;




/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
