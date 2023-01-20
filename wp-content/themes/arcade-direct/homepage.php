<?php

/*
 Template Name: Homepage
*/

get_header();
?>

<main id="primary" class="site-main">

	<div class="hero" data-skip-lazy="" style="height:350px; background-image: url(/wp-content/themes/arcade-direct/images/banner-bg.svg);">

		<div class="wrap dflex">

			<div class="col">

				<h1>We are the UK Arcade Machine Hire Specialists</h1>

				<p>& we don't do ordinary...</p>
				
			</div>

			<picture>
	    		<source type="image/webp" srcset="https://arcadedirect.co.uk/wp-content/uploads/2022/05/arcade-machines.png.webp 2000w, https://arcadedirect.co.uk/wp-content/uploads/2022/05/arcade-machines-300x190.png 300w, https://arcadedirect.co.uk/wp-content/uploads/2021/04/arcade-machines-768x486.png.webp 768w, https://arcadedirect.co.uk/wp-content/uploads/2022/05/arcade-machines.png.webp 1024w" sizes="(max-width: 2000px) 100vw, 2000px">

	    		<img width="553" height="350" src="https://arcadedirect.co.uk/wp-content/uploads/2022/05/arcade-machines.png.webp" alt="arcade machines" srcset="https://arcadedirect.co.uk/wp-content/uploads/2022/05/arcade-machines.png.webp 2000w, https://arcadedirect.co.uk/wp-content/uploads/2022/05/arcade-machines-300x190.png 300w, https://arcadedirect.co.uk/wp-content/uploads/2021/04/arcade-machines-768x486.png.webp 768w, https://arcadedirect.co.uk/wp-content/uploads/2022/05/arcade-machines.png.webp 1024w" sizes="(max-width: 2000px) 100vw, 2000px">
			</picture>


		</div>

	</div><!-- hero -->

	<div class="wrap">

		<?php 
		$images = get_field('logo_gallery');
		$size = 'medium'; // (thumbnail, medium, large, full or custom size)
		if( $images ): ?>
		    <div class="gallery dflex">
		        <?php foreach( $images as $image_id ): ?>
		            <span>
		                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
		            </span>
		        <?php endforeach; ?>
		    </div>
		<?php endif; ?>

		<div class="featuredbanner">

			<div style="background-size: cover;  background-position: center;;background-image: url('/wp-content/uploads/2020/12/custom-branded-arcade-machines.jpg.webp');" class="image"></div>

			<div class="content">

				<h2>Custom Branded Machines</h2>
				<p>We can fully we can personalise some of our top requested arcade games machines to promote your business.</p>
				<a style="margin-top: 1rem;" class="button" href="/custom-arcade-machines/">Custom Arcade Machines</a>
				
			</div>

		</div>

		<div class="featuredbanner">

			<div style="background-size: cover;  background-position: center;;background-image: url('/wp-content/uploads/2020/12/long-term-rental.jpg.webp');" class="image"></div>

			<div class="content">

				<h2>Long Term Rental</h2>

				<p><strong>From £35 + VAT per cabinet, per week</strong></br>Standard and coin-operated machines to create interactive experiences for customers or generate extra revenue. You can also hire a machine for personal use for your home games room! Benefit from the best rates with our long term hire.</p>
				<a style="margin-top: 1rem;" class="button" href="/long-term-arcade-machine-hire/">Long Term Hire</a>
				
			</div>

		</div>


		<div class="featuredbanner">

			<div style="background-size: cover;  background-position: center;;background-image: url('/wp-content/uploads/2020/12/arcade-event-hire.jpg.webp');" class="image"></div>

			<div class="content">

				<h2>Event Hire</h2>

				<p><strong>From £295 + VAT per cabinet, per day</strong></br>Hire one of our machines for a single event such as an awards night or a birthday celebration.</p>
				<a style="margin-top: 1rem;" class="button" href="/event-hire">Hire machines for events</a>
				
			</div>

		</div>


		<h2>Our Retro Arcade Machines</h2>
		<p>We have a huge variety of gaming cabinets on offer. Recreate a classic arcade with <a href="/retro-arcade-machine-hire/">retro arcade machines</a> such as Pac-man, Space Invaders, Time Crisis, Street Fighter and Galaxian. For some seaside nostalgia we can help you create ‘end of the pier’ style events with popcorn, candyfloss, and old-fashioned fairground stalls, we can supply them all. </br>
			Have a look to see all the machines we offer by selecting a category below. You have the option to <a href="/arcade-games-for-sale/">buy arcade machines</a> directly from us, or hire them short and long term. Should there be a particular machine that does not feature on our site, please contact us as we may well have one in stock or be able to source one for you. With original games from the 80's and 90's, we are the experts in bringing classic games to your home or event.</p>

		<div class="featuredmachines">

			<div class="content">

				<h2>Retro Arcade Machines</h2>

				<p style="margin-top: 0;">Hire from £295 + VAT</p>

				<a href="/retro-arcade-machine-hire/" class="button" style="width: 100%;margin-bottom: 10px;">Retro Machine Hire</a>
				<a href="/retro-arcade-machines/" class="button secondary" style="width: 100%;">Buy Retro Games</a>
			
			</div>

			<div class="productgrid small">
				<h3>Popular Retro Arcade Games</h3>
				<div class="inner">
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2019/03/original-pacman-arcade-machine-hire-100x100.png.webp" alt="pacman">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Pacman</h4>
							<div class="links">
								<a href="/pacman-arcade-machine-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
								<a href="/original-pacman-arcade-machine/">Buy
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2018/11/original-space-invaders-arcade-game-machine-hire-100x100.png.webp" alt="space-invaders">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Space Invaders</h4>
							<div class="links">
								<a href="/space-invaders-arcade-machine-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
								<a href="/original-space-invaders-arcade-machine/">Buy
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2019/03/original-galaxian-arcade-machine-hire-100x100.png.webp" alt="galaxian">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Galaxian</h4>
							<div class="links">
								<a href="/galaxian-arcade-machine-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
								<a href="/galaxian-arcade-machine/">Buy
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2019/03/defender-arcade-machine-hire-100x100.png.webp" alt="defender">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Defender</h4>
							<div class="links">
								<a href="defender-arcade-machine-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
								
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2018/11/time-crisis-twin-arcade-game-hire-100x100.png.webp" alt="time crisis">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Time Crisis ||</h4>
							<div class="links">
								<a href="/time-crisis-ii-twin-arcade-machine-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
								<a href="/time-crisis-ii-twin-arcade-machine/">Buy
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2018/11/house-of-dead-sega-original-arcade-machine-game-hire-100x100.png.webp" alt="house of the dead">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original House of The Dead</h4>
							<div class="links">
								<a href="/house-of-the-dead-arcade-machine-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
								
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2018/11/point-blank-original-namco-arcade-game-machine-hire-100x100.png.webp" alt="point blank">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Point Blank</h4>
							<div class="links">
								<a href="/point-blank-arcade-machine-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
					
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/2019/08/original-tron-arcade-machine-hire-100x100.png.webp" alt="Tron">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Tron</h4>
							<div class="links">
								<a href="/original-tron-hire/">Hire
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<img width="100" height="100" src="/wp-content/uploads/1970/01/products-Ast_2__32923.1414934036.1280.1280-100x100.png.webp" alt="asteroids">
						<div class="detail">
							<h4 style="margin-bottom: 0;">Original Asteroids</h4>
							<div class="links">
								
								<a href="/original-asteroids-arcade-machine/">Buy
									<svg style="width: 10px; margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M85.14 475.8c-3.438-3.141-5.156-7.438-5.156-11.75c0-3.891 1.406-7.781 4.25-10.86l181.1-197.1L84.23 58.86c-6-6.5-5.625-16.64 .9062-22.61c6.5-6 16.59-5.594 22.59 .8906l192 208c5.688 6.156 5.688 15.56 0 21.72l-192 208C101.7 481.3 91.64 481.8 85.14 475.8z"/></svg>
								</a>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>

		<h2>Arcade Game Categories</h2>


		<div class="productgrid four">
			
			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2011/04/i-boxer-boxing-machine-for-sale-uk-300x300.png.webp" alt="boxing machines">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Boxing Machines</h3>
					<p style="margin-top: 0;">Hire from £395 + VAT</p>
					
					<a href="/boxing-machine-hire/" class="button" style="margin-bottom: 5px;">Hire Punch Machines</a>
					<a href="/boxer-arcade-machines/" class="button secondary">Buy Boxing Machines</a>
					
				</div>
			</div>

			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2018/11/dance-arcade-machine-game-for-hire-300x300.png.webp" alt="dance machines">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Dance Machines</h3>
					<p style="margin-top: 0;">Hire from £595 + VAT</p>
					
						<a href="/dance-machine-hire/" class="button" style="margin-bottom: 5px;">Hire Dance Machines</a>
						<a href="/dance-arcade-machines/" class="button secondary">Buy Dance Machines</a>
					
				</div>
			</div>

			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2018/11/sega-rally-twin-arcade-game-machine-hire-300x300.png.webp" alt=" driving machines">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Driving Machines</h3>
					<p style="margin-top: 0;">Hire from £595 + VAT</p>
				
						<a href="/driving-arcade-machines-for-hire/" class="button" style="margin-bottom: 5px;">Hire Driving Games</a>
						<a href="/driving-arcade-machines/" class="button secondary">Buy Racing Machines</a>
					
				</div>
			</div>

			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2011/04/family-guy-pinball-machine-for-sale-uk-300x300.png.webp" alt=" pinball machines">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Pinball Machines</h3>
					<p style="margin-top: 0;">Hire from £595 + VAT</p>
					
						<a href="https://arcadedirect.co.uk/pinball-machine-hire/" class="button" style="margin-bottom: 5px;">Hire Pinballs</a>
						<a href="https://arcadedirect.co.uk/pinball-machine-hire/" class="button secondary">Buy Pinballs</a>
					
				</div>
			</div>

			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2018/11/time-crisis-twin-arcade-game-hire.png.webp" alt="shooting machines">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Shooting Machines</h3>
					<p style="margin-top: 0;">Hire from £295 + VAT</p>
					
						<a href="/shooting-arcade-machines-for-hire/" class="button" style="margin-bottom: 5px;">Hire Shooting Games</a>
						<a href="/shooting-arcade-machines/" class="button secondary">Buy Shooting Games</a>
					
				</div>
			</div>

			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2018/11/dance-arcade-machine-game-for-hire-300x300.png.webp" alt="multiplayer machines">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Multiplay Machines</h3>
					<p style="margin-top: 0;">Hire from £995 + VAT</p>
					
						<a href="https://arcadedirect.co.uk/multi-games-tables/" class="button" style="margin-bottom: 5px;">Hire Multi-Games Tables</a>
						<a href="https://arcadedirect.co.uk/multiplay-arcade-machines/" class="button secondary">Buy Multi-Player Cabinets</a>
					
				</div>
			</div>

			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2018/11/sega-rally-twin-arcade-game-machine-hire-300x300.png.webp" alt="pool tables">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Pool Tables</h3>
					<p style="margin-top: 0;">Buy from £719 + VAT</p>
					
						<a href="/pool-tables/" class="button secondary">Buy Pool Tables</a>
					
				</div>
			</div>

			<div class="col center" style="margin-bottom: 3rem;">
				<img width="300" height="300" src="/wp-content/uploads/2019/09/football-tables.jpg.webp" alt="football tables">
				<div class="detail">
					<h3 style="margin-bottom: 0;">Football Tables</h3>
					<p style="margin-top: 0;">Buy from £734 + VAT</p>
					
						<a href="/football-tables/" class="button secondary">Buy Football Tables</a>
					
				</div>
			</div>


		</div>


		<div class="featuredbanner greybg" style="margin-bottom: 1rem">

			<picture>
			  <source media="(max-width: 599px)" srcset="/wp-content/uploads/2020/12/arcade-machine-repair-300x300.jpg.webp">
			  <source media="(min-width: 600px)" srcset="/wp-content/uploads/2020/12/arcade-machine-repair.jpg.webp">
			 <img class="skip-lazy" width="600" height="400" src="/wp-content/uploads/2020/12/arcade-machine-repair.jpg.webp" alt="Arcade Repair">
			</picture>
 			<amp-img width="300" height="300" src="/wp-content/uploads/2020/12/arcade-machine-repair-300x300.jpg.webp" alt="Arcade Repair">

			<div class="content">

				<h2>Arcade Machine Repair & Servicing</h2>
				<p>Our professional technicians can bring your old, broken machine back to life, making it look and operate like new. We offer arcade machine service, repair and refurbishment and we can collect from anywhere in the UK!</p>
				<a class="button" href="/arcade-machine-repair/">Arcade Machine Repair</a>
				
			</div>

		</div>

		<?php
			the_content();
		?>

		</div>
		

	</main><!-- #main -->

<?php

get_footer();
