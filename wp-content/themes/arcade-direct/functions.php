<?php
/**
 * Arcade Direct functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Arcade_Direct
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
if ( ! function_exists( 'arcade_direct_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arcade_direct_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Arcade Direct, use a find and replace
		 * to change 'arcade-direct' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arcade-direct', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_image_size( 'custom-crop-600', 600, 255, true ); 
		add_image_size( 'custom-600', 600, 600);
		add_image_size( 'custom-250x350', 250, 350, true);
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'arcade-direct' ),
				'mobile-menu' => esc_html__( 'Mobile Menu', 'arcade-direct' ),
			)
		);
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'arcade_direct_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'arcade_direct_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arcade_direct_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'arcade_direct_content_width', 640 );
}
add_action( 'after_setup_theme', 'arcade_direct_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arcade_direct_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'arcade-direct' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'arcade-direct' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="widget-title">',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 1', 'arcade-direct' ),
			'id'            => 'footercol1',
			'description'   => esc_html__( 'Add widgets here.', 'arcade-direct' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="footercol-title">',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 2', 'arcade-direct' ),
			'id'            => 'footercol2',
			'description'   => esc_html__( 'Add widgets here.', 'arcade-direct' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="footercol-title">',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 3', 'arcade-direct' ),
			'id'            => 'footercol3',
			'description'   => esc_html__( 'Add widgets here.', 'arcade-direct' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="footercol-title">',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 4', 'arcade-direct' ),
			'id'            => 'footercol4',
			'description'   => esc_html__( 'Add widgets here.', 'arcade-direct' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="footercol-title">',
			'after_title'   => '</p>',
		)
	);
}
add_action( 'widgets_init', 'arcade_direct_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function arcade_direct_scripts() {
	wp_enqueue_style( 'arcade-direct-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'arcade-direct-style', 'rtl', 'replace' );
	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slick-theme.css',false,'1.1','all');
	wp_enqueue_style( 'slidermain', get_template_directory_uri() . '/css/slick.css',false,'1.1','all');

	wp_enqueue_script( 'slickslider', get_template_directory_uri() . '/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'arcade-direct-navigation', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}	
}
add_action( 'wp_enqueue_scripts', 'arcade_direct_scripts' );
function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( false === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) !== false || strpos( $url, 'jquery.min.js' ) !== false || strpos($url, 'jquery-migrate.min.js') !== false || strpos( $url, 'jquery-migrate.js' ) !== false) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(/wp-content/themes/arcade-direct/images/arcade-direct-login-logo.png);
		height:37px;
		width:250px;
		background-size: 250px 37px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
        body.login-action-login,
        #wp-auth-check {
        	background: #081224;
        }
        .login #backtoblog a, .login #nav a {
			color: #fff!important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );






// load font awesome kit
/*if (! function_exists('fa_custom_setup_kit') ) {
  function fa_custom_setup_kit($kit_url = '') {
    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $kit_url ) {
          wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
        }
      );
    }
  }
}

fa_custom_setup_kit('https://kit.fontawesome.com/6e6eb88837.js');*/




/**
 * Hide loop read more buttons for out of stock items 
 */
if (!function_exists('woocommerce_template_loop_add_to_cart')) {
	function woocommerce_template_loop_add_to_cart() {
		global $product;
		if ( ! $product->is_in_stock() || ! $product->is_purchasable() ) return;
		wc_get_template('loop/add-to-cart.php');
	}
}









if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General',
		'menu_title'	=> 'Theme General',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
add_theme_support( 'woocommerce' );

function disable_woo_commerce_sidebar() {
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10); 
}
add_action('init', 'disable_woo_commerce_sidebar');


function bd_rrp_price_html( $price, $product ) {
	global $product;
	if( has_term( 'arcade-machine-hire', 'product_cat', $product->id ) ) {
  		
  		if(get_field('long_term_hire_price') ) {

  			$return_string = '<p style="margin:0;">Daily Hire Price</p>' . $price;

  		
		}

	    else {
	  		$return_string = '<p style="margin:0;">Daily Hire Price</p>' . $price; 
	  	}
	    
		if (is_single()) {
			$return_string .= '<p style="margin-bottom: 0; margin-right: 0.5rem; margin-left: 0.5rem; padding: 0.5em;background: #cffff2;font-size: 0.8rem; border: 1px solid #3fbea0;" class="multimachine-msg"><svg style="width: 15px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M347.3 164.7C353.6 170.9 353.6 181.1 347.3 187.3L187.3 347.3C181.1 353.6 170.9 353.6 164.7 347.3C158.4 341.1 158.4 330.9 164.7 324.7L324.7 164.7C330.9 158.4 341.1 158.4 347.3 164.7zM168 191.1C168 178.7 178.7 167.1 192 167.1C205.3 167.1 216 178.7 216 191.1C216 205.3 205.3 215.1 192 215.1C178.7 215.1 168 205.3 168 191.1zM296 319.1C296 306.7 306.7 295.1 320 295.1C333.3 295.1 344 306.7 344 319.1C344 333.3 333.3 344 320 344C306.7 344 296 333.3 296 319.1zM343.1 45.63C376.1 39.67 411.5 49.43 437 74.98C462.6 100.5 472.3 135.9 466.4 168.9C493.9 187.1 512 219.9 512 255.1C512 292.1 493.9 324 466.4 343.1C472.3 376.1 462.6 411.5 437 437C411.5 462.6 376.1 472.3 343.1 466.4C324 493.9 292.1 512 256 512C219.9 512 187.1 493.9 168.9 466.4C135.9 472.3 100.5 462.6 74.98 437C49.43 411.5 39.67 376.1 45.63 343.1C18.08 324 0 292.1 0 255.1C0 219.9 18.08 187.1 45.63 168.9C39.67 135.9 49.43 100.5 74.98 74.98C100.5 49.43 135.9 39.67 168.9 45.63C187.1 18.08 219.9 0 255.1 0C292.1 0 324 18.08 343.1 45.63L343.1 45.63zM184.4 83.08L171.7 79.2C146.3 71.4 117.6 77.57 97.61 97.61C77.57 117.6 71.4 146.3 79.2 171.7L83.08 184.4L71.4 190.6C47.93 203 32 227.7 32 255.1C32 284.3 47.93 308.1 71.4 321.4L83.08 327.6L79.2 340.3C71.4 365.7 77.57 394.3 97.61 414.4C117.6 434.4 146.3 440.6 171.7 432.8L184.4 428.9L190.6 440.6C203 464.1 227.7 480 256 480C284.3 480 308.1 464.1 321.4 440.6L327.6 428.9L340.3 432.8C365.7 440.6 394.3 434.4 414.4 414.4C434.4 394.3 440.6 365.7 432.8 340.3L428.9 327.6L440.6 321.4C464.1 308.1 480 284.3 480 255.1C480 227.7 464.1 203 440.6 190.6L428.9 184.4L432.8 171.7C440.6 146.3 434.4 117.6 414.4 97.6C394.4 77.56 365.7 71.4 340.3 79.2L327.6 83.08L321.4 71.4C308.1 47.93 284.3 31.1 256 31.1C227.7 31.1 203 47.93 190.6 71.4L184.4 83.08z"/></svg></i><strong>Long Term Hire: ' . get_field("long_term_hire_price") . '+ VAT per week</strong></p>';
		}
		$return_string .= '</p>';
  	}
  	elseif( has_term( 'custom-arcade-machines', 'product_cat', $product->id ) ) {
  		$return_string = '<p style="margin:0;">Daily hire & cusomisation from</p>' . $price;
  	}

  	else {
  		$return_string = $price;
  	}
  	return $return_string;
}
add_filter( 'woocommerce_get_price_html', 'bd_rrp_price_html', 100, 2 );

// define the woocommerce_product_meta_end callback 
function action_woocommerce_product_meta_start(  ) { 
    global $product;
    if ( has_term( 'arcade-machine-hire', 'product_cat', $product->get_id() ) || has_term( 'student-event-hire-packages', 'product_cat', $product->get_id() ) ) {

	   // <p><strong>Long term hire available from £35 + VAT per cabinet, per week! (minimum 12 month agreement)</strong></p>
	   	echo '<div class="delivery-table" style="overflow-x:auto;">
	   	<span>Delivery Information: The below pricing is for guidance only. Exact transport costs will be advised on requesting your quote.</span>
		  <table>
		   <tr>
		    <th style="width:50%">Manchester / North West</th>
		    <th>£150.00 each way</th>
		  </tr>
		  <tr>
		    <th style="width:50%">Birmingham / Midlands</th>
		    <th>£250.00 each way</th>
		  </tr>
		  <tr>
		    <th style="width:50%">London /South</th>
		    <th>£350.00 each way</th>
		  </tr>
		  </table>
		</div>';
	}
	
	else if( has_term( 'arcade-games-for-sale', 'product_cat', $product->id ) ) {
	    // echo '<p style="text-align: center; padding: 10px; background: #ececec;">All website prices are based on one day hire. Hire length and delivery will reflect in the quote you receive.</p>';
	   	echo '<div class="delivery-table" style="overflow-x:auto;">
	   	<span>Delivery Information</span>
		  <table>
		   <tr>
		    <th style="width:50%">Manchester / North West</th>
		    <th>£150.00 each way</th>
		  </tr>
		  <tr>
		    <th style="width:50%">Birmingham / Midlands</th>
		    <th>£250.00 each way</th>
		  </tr>
		  <tr>
		    <th style="width:50%">London /South</th>
		    <th>£350.00 each way</th>
		  </tr>
		  </table>
		</div>';
	}
}; 






// add extra info boxes on product pages
function action_woocommerce_add_extra_info_boxes(  ) { 
    global $product;
	if( has_term( 'arcade-machine-hire', 'product_cat', $product->id ) ) {
	   	echo '<div class="product-info-boxes">
	   		<div class="col" style="flex-basis: 50%;">
	   			<div class="inner" style="padding: 2rem;border: 1px solid #D9D9D9">
	   				<span class="title">How does it work?</span>
	   				<ul>
	   					<li class="eye">
	   					<svg style="width: 25px; fill: #35bb9d; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/></svg>
	   					<strong>Choose your favourite machines</strong></br>You can hire just one or multiple cabinets! Hit "Add to Quote" and they will go into your quote list at the top of the website.</li>
	   					<li class="calendar">
	   					<svg style="width: 25px; fill: #35bb9d; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"/></svg>
	   					<strong>Let us know how long you need the machine for</strong></br>You can hire for a single event or longer term, simply let us know and we can give you a bespoke quote.</li>
	   					<li class="location">
	   					<svg style="width: 25px; fill: #35bb9d; margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M112 152C112 138.7 122.7 128 136 128C149.3 128 160 138.7 160 152C160 165.3 149.3 176 136 176C122.7 176 112 165.3 112 152zM272 152C272 165.3 261.3 176 248 176C234.7 176 224 165.3 224 152C224 138.7 234.7 128 248 128C261.3 128 272 138.7 272 152zM192 252C217.7 252 234.9 235.6 239.4 228.9C245.5 219.7 257.9 217.2 267.1 223.4C276.3 229.5 278.8 241.9 272.6 251.1C262.9 265.7 234.5 292 192 292C149.5 292 121.1 265.7 111.4 251.1C105.2 241.9 107.7 229.5 116.9 223.4C126.1 217.2 138.5 219.7 144.6 228.9C149.1 235.6 166.3 252 192 252V252zM384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192H384zM192 48C112.5 48 48 112.5 48 192C48 204.4 52.49 223.6 63.3 249.2C73.78 274 88.66 301.4 105.8 329.1C134.2 375.3 167.2 419.1 192 451.7C216.8 419.1 249.8 375.3 278.2 329.1C295.3 301.4 310.2 274 320.7 249.2C331.5 223.6 336 204.4 336 192C336 112.5 271.5 48 192 48V48z"/></svg>
	   					<strong>Let Arcade Direct take care of the rest</strong></br>Our team of experts will prepare your machine and deliver it to your chosen location.</li>
	   				</ul>
	   			</div>
	   		</div>
	   		<div class="col" style="display: flex; flex-basis: 50%; background: #081224; color: #fff;">
	   			<div style="flex-basis: 33.3%; background-size: cover;  background-position: center;background-image: url(/wp-content/uploads/2020/12/full-event-customisation-product-600x592.jpg.webp);" class="image"></div>
	   			<div class="content" style="display: flex; flex-direction: column; justify-content: center; padding: 2rem;flex-basis: 66.6%;">
   					<span class="title">Full Event Customisation</span>
   					<p>As a professional private and corporate event planning company, we can fully theme your event, big or small.</p>
   					<a class="button" href="/full-event-customisation/">Find out more</a>
   					<p>We also provide <a href="https://arcadedirect.co.uk/custom-arcade-machines/">custom arcade machines</a></p>
   				</div>
	   		</div>
	   	</div>';
	}
	else if( has_term( 'custom-arcade-machines', 'product_cat', $product->id ) ) {
		echo '<div class="product-info-boxes">
	   		<div class="col" style="flex-basis: 50%;">
	   			<div class="inner" style="padding: 2rem;border: 1px solid #D9D9D9">
	   				<span class="title">How does it work?</span>
	   				<ul>
	   					<li class="paintbrush"><strong>Choose your machine and provide your design files</strong></br>We send a template for you to drop the artwork on, or we can design the artwork for you at an extra cost.</li>
	   					<li class="calendar"><strong>Let us know how long you need the machine for</strong></br>You can hire for a single event or longer term, simply let us know and we can give you a bespoke quote.</li>
	   					<li class="location"><strong>Let Arcade Direct take care of the rest</strong></br>Our team of experts will prepare your machine and deliver it to your chosen location.</li>
	   				</ul>
	   			</div>
	   		</div>
	   		<div class="col" style="display: flex; flex-basis: 50%; background: #081224; color: #fff;">
	   			<div style="flex-basis: 33.3%; background-size: cover;  background-position: center;background-image: url(/wp-content/uploads/2020/12/full-event-customisation-product-600x592.jpg.webp);" class="image"></div>
	   			<div class="content" style="display: flex; flex-direction: column; justify-content: center; padding: 2rem;flex-basis: 66.6%;">
   					<span class="title">Full Event Customisation</span>
   					<p>As a professional private and corporate event planning company, we can fully theme your event, big or small.</p>
   					<a class="button" href="/full-event-customisation/">Find out more</a>
   				</div>
	   		</div>
	   	</div>';
	   	
	}
}; 







         
add_action( 'woocommerce_before_add_to_cart_form', 'action_woocommerce_product_meta_start' );

add_action( 'woocommerce_product_additional_information', 'print_custom_html' );

add_action( 'woocommerce_after_single_product_summary', 'action_woocommerce_add_extra_info_boxes' );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );



add_action( 'woocommerce_after_single_product_summary', 'additional_info_under_add_to_cart', 9 );
function additional_info_under_add_to_cart() {
    global $product;

    if ( $product && ( $product->has_attributes() || apply_filters( 'wc_product_enable_dimensions_display', $product->has_weight() || $product->has_dimensions() ) ) ) {
    	echo "<div><h2>Machine Specification:</h2><div>";
        wc_display_product_attributes( $product );
        echo "</div><p>Measurements are approximates and may vary between cabinets.<p></div>";
    }
}

  
add_action( 'woocommerce_after_single_product_summary', 'bbloomer_wc_output_long_description', 10 );


  
function bbloomer_wc_output_long_description() {

if ( get_the_content() ) { ?>

   <div class="woocommerce-tabs">
   <?php the_content(); ?>
   </div>

<?php } ?> 
   
<?php
}




// function wpb_imagelink_setup() {
//     $image_set = get_option( 'image_default_link_type' );
     
//     if ($image_set !== 'none') {
//         update_option('image_default_link_type', 'none');
//     }
// }
// add_action('admin_init', 'wpb_imagelink_setup', 10);


// add_filter('woocommerce_single_product_image_thumbnail_html','wc_remove_link_on_thumbnails' );
 
// function wc_remove_link_on_thumbnails( $html ) {
//      return strip_tags( $html,'<img>' );
// }

// add_theme_support( 'wc-product-gallery-lightbox' );
// add_theme_support( 'wc-product-gallery-slider' );

function print_custom_html(){
	?>
	<ul>
		<li><strong>Power:</strong> All machines require a standard 13amp socket. The machines should ideally be placed on separate sockets and not multi-plug extension cables.</li>
		<li><strong>Warranty:</strong> All machines purchased from Arcade Direct will be covered by the following warranty unless otherwise stated:
			<ul>
				<li>New machines purchased for domestic use – 12 months back to base parts and labour.</li>
				<li>Refurbished machines purchased for domestic use – 3 months back to base parts and labour.</li>
				<li>New machines purchased for commercial use – 6 months back to base parts and labour.</li>
				<li>Refurbished machines purchased for commercial use – 3 months back to base parts and labour.</li>
			</ul>
		</li>
	</ul>

	<?php
}


function deactivate_on_single_product() {

	// Disable LazyLoad for images on a 'product' post type singular template.
	if ( is_singular( 'product' ) ) {
		add_filter( 'wp_lazy_loading_enabled', '__return_false' );
	}
}








