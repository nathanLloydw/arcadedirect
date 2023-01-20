<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arcade_Direct
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WZM7FM9');</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22562868-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-22562868-2');
	</script>

	<script type="text/javascript">

		jQuery(document).ready( function() {
			jQuery(document).bind('gform_confirmation_loaded', function(event, formId){
				window.dataLayer.push({
			            'event' : 'gravityFormSubmission',
			            'gfformID' : formId		
				});
			});
			})
		</script>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZM7FM9"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	
	<script type="text/javascript" src="https://secure.perk0mean.com/js/176036.js"></script>



<noscript><img src="https://secure.perk0mean.com/176036.png" alt="" style="display:none;" /></noscript>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'arcade-direct' ); ?></a>

	<header id="masthead" role="banner">

		<div id="topbar">

		<?php if ( !wp_is_mobile() ) : ?>

			<div class="wrap dflex">

				<div class="col">
					<svg style="width: 15px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 304V64C0 28.65 28.65 0 64 0H320C355.3 0 384 28.65 384 64V304C384 348.2 348.2 384 304 384H256V448C256 483.3 227.3 512 192 512C156.7 512 128 483.3 128 448V384H80C35.82 384 0 348.2 0 304zM304 352C330.5 352 352 330.5 352 304V288H32V304C32 330.5 53.49 352 80 352H160V448C160 465.7 174.3 480 192 480C209.7 480 224 465.7 224 448V352H304zM352 64C352 46.33 337.7 32 320 32H224V112C224 120.8 216.8 128 208 128C199.2 128 192 120.8 192 112V32H128V144C128 152.8 120.8 160 112 160C103.2 160 96 152.8 96 144V32H64C46.33 32 32 46.33 32 64V256H352V64z"/></svg>
				Bespoke design service <a href="https://arcadedirect.co.uk/custom-arcade-machines/">Custom Arcade Machines</a></div>
				<div class="col">
					<svg style="width: 15px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M347.3 164.7C353.6 170.9 353.6 181.1 347.3 187.3L187.3 347.3C181.1 353.6 170.9 353.6 164.7 347.3C158.4 341.1 158.4 330.9 164.7 324.7L324.7 164.7C330.9 158.4 341.1 158.4 347.3 164.7zM168 191.1C168 178.7 178.7 167.1 192 167.1C205.3 167.1 216 178.7 216 191.1C216 205.3 205.3 215.1 192 215.1C178.7 215.1 168 205.3 168 191.1zM296 319.1C296 306.7 306.7 295.1 320 295.1C333.3 295.1 344 306.7 344 319.1C344 333.3 333.3 344 320 344C306.7 344 296 333.3 296 319.1zM343.1 45.63C376.1 39.67 411.5 49.43 437 74.98C462.6 100.5 472.3 135.9 466.4 168.9C493.9 187.1 512 219.9 512 255.1C512 292.1 493.9 324 466.4 343.1C472.3 376.1 462.6 411.5 437 437C411.5 462.6 376.1 472.3 343.1 466.4C324 493.9 292.1 512 256 512C219.9 512 187.1 493.9 168.9 466.4C135.9 472.3 100.5 462.6 74.98 437C49.43 411.5 39.67 376.1 45.63 343.1C18.08 324 0 292.1 0 255.1C0 219.9 18.08 187.1 45.63 168.9C39.67 135.9 49.43 100.5 74.98 74.98C100.5 49.43 135.9 39.67 168.9 45.63C187.1 18.08 219.9 0 255.1 0C292.1 0 324 18.08 343.1 45.63L343.1 45.63zM184.4 83.08L171.7 79.2C146.3 71.4 117.6 77.57 97.61 97.61C77.57 117.6 71.4 146.3 79.2 171.7L83.08 184.4L71.4 190.6C47.93 203 32 227.7 32 255.1C32 284.3 47.93 308.1 71.4 321.4L83.08 327.6L79.2 340.3C71.4 365.7 77.57 394.3 97.61 414.4C117.6 434.4 146.3 440.6 171.7 432.8L184.4 428.9L190.6 440.6C203 464.1 227.7 480 256 480C284.3 480 308.1 464.1 321.4 440.6L327.6 428.9L340.3 432.8C365.7 440.6 394.3 434.4 414.4 414.4C434.4 394.3 440.6 365.7 432.8 340.3L428.9 327.6L440.6 321.4C464.1 308.1 480 284.3 480 255.1C480 227.7 464.1 203 440.6 190.6L428.9 184.4L432.8 171.7C440.6 146.3 434.4 117.6 414.4 97.6C394.4 77.56 365.7 71.4 340.3 79.2L327.6 83.08L321.4 71.4C308.1 47.93 284.3 31.1 256 31.1C227.7 31.1 203 47.93 190.6 71.4L184.4 83.08z"/></svg>
					Discounts for multi-machine hire <a href="https://arcadedirect.co.uk/arcade-machine-hire/">See machines</a></div>
				<div class="col">
					<svg style="width: 15px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 480c-123.5 0-224-100.5-224-224s100.5-224 224-224s224 100.5 224 224S379.5 480 256 480zM240 344c-13.25 0-24 10.75-24 24s10.75 24 24 24s24-10.75 24-24S253.3 344 240 344zM285.6 128H226.4C189.8 128 160 157.8 160 194.4V204c0 8.844 7.156 16 16 16S192 212.8 192 204V194.4C192 175.4 207.4 160 226.4 160h59.25C304.6 160 320 175.4 320 194.4c0 12.48-6.781 24-17.06 29.72L242.5 254.3C231.1 260.7 224 272.7 224 285.8V304C224 312.8 231.2 320 240 320S256 312.8 256 304V285.8c0-1.453 .7813-2.797 1.438-3.172l60.41-30.22C338.9 240.7 352 218.5 352 194.4C352 157.8 322.2 128 285.6 128z"/></svg>
					Need help and advice? Call us on: <a href="tel:01772 497206">01772 497206</a></div>

			</div>

		<?php else : ?>
			
			<?php if (function_exists('WC')) {
				$cart_items = WC()->cart->get_cart_contents_count(); ?>
				<a class="cart" href="<?php bloginfo('url') ?>/basket/" title="My Cart" style="display: flex;">
					<svg style="width:20px;margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M80 0C87.47 0 93.95 5.17 95.6 12.45L100 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H158.2L172.8 352H496C504.8 352 512 359.2 512 368C512 376.8 504.8 384 496 384H160C152.5 384 146.1 378.8 144.4 371.5L67.23 32H16C7.164 32 0 24.84 0 16C0 7.164 7.164 0 16 0H80zM107.3 64L150.1 256H487.8L541.8 64H107.3zM128 456C128 425.1 153.1 400 184 400C214.9 400 240 425.1 240 456C240 486.9 214.9 512 184 512C153.1 512 128 486.9 128 456zM184 480C197.3 480 208 469.3 208 456C208 442.7 197.3 432 184 432C170.7 432 160 442.7 160 456C160 469.3 170.7 480 184 480zM512 456C512 486.9 486.9 512 456 512C425.1 512 400 486.9 400 456C400 425.1 425.1 400 456 400C486.9 400 512 425.1 512 456zM456 432C442.7 432 432 442.7 432 456C432 469.3 442.7 480 456 480C469.3 480 480 469.3 480 456C480 442.7 469.3 432 456 432z"/></svg>
					Cart (<?php echo ($cart_items == 1 ? $cart_items . " item" : $cart_items . " items") ?>)
				</a>
			<?php } ?>
			<a class="my-quote" href="<?php bloginfo('url') ?>/request-quote/" title="My Quote" style="display: flex;">
				<svg style="width:20px;margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.1 .0041h-384c-35.25 0-64 28.75-64 63.1v287.1c0 35.25 28.75 63.1 64 63.1h96v83.99c0 9.838 11.03 15.55 19.12 9.7l124.9-93.69h144c35.25 0 64-28.75 64-63.1V63.1C511.1 28.75 483.2 .0041 447.1 .0041zM480 352c0 17.6-14.4 32-32 32h-144.1c-6.928 0-13.67 2.248-19.21 6.406L192 460v-60c0-8.838-7.164-16-16-16H64c-17.6 0-32-14.4-32-32V64c0-17.6 14.4-32 32-32h384c17.6 0 32 14.4 32 32V352zM319.9 184c13.25 0 24-10.75 24-24s-10.75-24-24-24s-24 10.75-24 24S306.7 184 319.9 184zM331.7 253.3C312.9 275.4 285.3 288 255.9 288S198.9 275.4 180.2 253.4C174.4 246.8 164.3 246 157.7 251.6c-6.875 5.75-7.5 15.75-1.875 22.62c24.88 29 61.44 45.74 100.2 45.74s75.18-16.74 100.2-45.87c5.75-6.75 4.875-16.88-1.875-22.62C347.7 245.8 337.6 246.6 331.7 253.3zM191.9 184c13.25 0 24-10.75 24-24s-10.75-24-24-24s-24 10.75-24 24S178.7 184 191.9 184z"/></svg>
				My Quote (<?php echo wp_strip_all_tags(do_shortcode('[yith_ywraq_number_items]')); ?>)
			</a>

		<?php endif; ?>

		</div>

		<?php if ( wp_is_mobile() ) : ?>

		<div class="wrap header" style="height: 112px;">

		<?php else : ?>

		<div class="wrap header" style="height: 115px;">

		<?php endif; ?>

			<div class="naigationwrapper">

				<?php if ( wp_is_mobile() ) : ?>

				<div class="hamburger">
					<svg style="width:30px;margin-right: 5px; fill: #fff;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 80C0 71.16 7.164 64 16 64H432C440.8 64 448 71.16 448 80C448 88.84 440.8 96 432 96H16C7.164 96 0 88.84 0 80zM0 240C0 231.2 7.164 224 16 224H432C440.8 224 448 231.2 448 240C448 248.8 440.8 256 432 256H16C7.164 256 0 248.8 0 240zM432 416H16C7.164 416 0 408.8 0 400C0 391.2 7.164 384 16 384H432C440.8 384 448 391.2 448 400C448 408.8 440.8 416 432 416z"/></svg>
				</div> <!--  .hamburger -->

				<nav id="site-navigation" class="main-navigation" style="display: none;">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mobile-menu',
						'menu_id'        => 'mobile-menu',
					)
				);
				?>
				</nav><!-- #site-navigation -->

				<?php else : ?>

				<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				</nav><!-- #site-navigation -->

				<?php endif; ?>

			</div> <!--  .naigationwrapper -->


			<div class="logo" itemscope itemtype="http://schema.org/Organization">
				<span class="screen-reader-text">Arcade Direct</span>
				<?php if ( wp_is_mobile() ) : ?>

					<a href="<?php bloginfo('url') ?>"><img src="/wp-content/themes/arcade-direct/images/ad-logo.svg" width="65" height="30" alt="Arcade Direct logo"></a>

				<?php else : ?>

					<a href="<?php bloginfo('url') ?>"><img src="/wp-content/themes/arcade-direct/images/arcadedirect-logo.svg" width="250" height="31" alt="Arcade Direct logo"></a>

				<?php endif; ?>
			</div>

			<div class="links">
				<a class="my-account" href="/my-account/" title="My Account">
					<svg style="width:26px;margin-right: 5px; fill: #fff;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM224 32c52.94 0 96 43.06 96 96c0 52.93-43.06 96-96 96S128 180.9 128 128C128 75.06 171.1 32 224 32zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM413.3 480H34.66C33.2 480 32 478.8 32 477.3C32 399.4 95.4 336 173.3 336h101.3C352.6 336 416 399.4 416 477.3C416 478.8 414.8 480 413.3 480z"/></svg>
				</a>
				<?php if ( !wp_is_mobile() ) : ?>
					<a class="my-quote" href="<?php bloginfo('url') ?>/request-quote/" title="My Quote" style="display: inline-flex;">
						<svg style="width:20px;margin-right: 5px;fill: #fff;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.1 .0041h-384c-35.25 0-64 28.75-64 63.1v287.1c0 35.25 28.75 63.1 64 63.1h96v83.99c0 9.838 11.03 15.55 19.12 9.7l124.9-93.69h144c35.25 0 64-28.75 64-63.1V63.1C511.1 28.75 483.2 .0041 447.1 .0041zM480 352c0 17.6-14.4 32-32 32h-144.1c-6.928 0-13.67 2.248-19.21 6.406L192 460v-60c0-8.838-7.164-16-16-16H64c-17.6 0-32-14.4-32-32V64c0-17.6 14.4-32 32-32h384c17.6 0 32 14.4 32 32V352zM319.9 184c13.25 0 24-10.75 24-24s-10.75-24-24-24s-24 10.75-24 24S306.7 184 319.9 184zM331.7 253.3C312.9 275.4 285.3 288 255.9 288S198.9 275.4 180.2 253.4C174.4 246.8 164.3 246 157.7 251.6c-6.875 5.75-7.5 15.75-1.875 22.62c24.88 29 61.44 45.74 100.2 45.74s75.18-16.74 100.2-45.87c5.75-6.75 4.875-16.88-1.875-22.62C347.7 245.8 337.6 246.6 331.7 253.3zM191.9 184c13.25 0 24-10.75 24-24s-10.75-24-24-24s-24 10.75-24 24S178.7 184 191.9 184z"/></svg>
						My Quote (<?php echo wp_strip_all_tags(do_shortcode('[yith_ywraq_number_items]')); ?>)
					</a>
					<?php if (function_exists('WC')) {
						$cart_items = WC()->cart->get_cart_contents_count(); ?>
						<a class="cart" href="<?php bloginfo('url') ?>/basket/" title="My Cart" style="display: inline-flex;">
							<svg style="width:20px;margin-right: 5px;fill: #fff;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M80 0C87.47 0 93.95 5.17 95.6 12.45L100 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H158.2L172.8 352H496C504.8 352 512 359.2 512 368C512 376.8 504.8 384 496 384H160C152.5 384 146.1 378.8 144.4 371.5L67.23 32H16C7.164 32 0 24.84 0 16C0 7.164 7.164 0 16 0H80zM107.3 64L150.1 256H487.8L541.8 64H107.3zM128 456C128 425.1 153.1 400 184 400C214.9 400 240 425.1 240 456C240 486.9 214.9 512 184 512C153.1 512 128 486.9 128 456zM184 480C197.3 480 208 469.3 208 456C208 442.7 197.3 432 184 432C170.7 432 160 442.7 160 456C160 469.3 170.7 480 184 480zM512 456C512 486.9 486.9 512 456 512C425.1 512 400 486.9 400 456C400 425.1 425.1 400 456 400C486.9 400 512 425.1 512 456zM456 432C442.7 432 432 442.7 432 456C432 469.3 442.7 480 456 480C469.3 480 480 469.3 480 456C480 442.7 469.3 432 456 432z"/></svg>
							Cart (<?php echo ($cart_items == 1 ? $cart_items . " item" : $cart_items . " items") ?>)
						</a>
					<?php } ?>
				<?php endif; ?>
			</div>


			<?php echo do_shortcode('[fibosearch]'); ?>

		
		</div>
		

	</header><!-- #masthead -->

	<div id="content">

	
	
		
	
