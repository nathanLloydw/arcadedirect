<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Arcade_Direct
 */

get_header();
?>


	<main style="text-align: center;background-image: url('/wp-content/themes/arcade-direct/images/404-bg.jpg');width: 100%; min-height: 500px;">

		<h1 style="padding: 3rem;color: #fff;margin: 0">OH NO! You got lost in outer gamer space.</h1>

		<img src="/wp-content/themes/arcade-direct/images/spaceman-404.png" alt="404">

		<div style="margin: auto;margin-bottom:3rem;display: inline-block;" type="button" class="button" onclick="history.back();">Go Back</div> 

	</main><!-- #main -->

<?php
get_footer();
