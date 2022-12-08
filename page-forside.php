<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

<main>
	<img class="forsidebillede" src="<?php echo get_stylesheet_directory_uri() ?>/linda-2.jpg" alt="forsidebillede">
	
<div class="socials">
	<a href="https://www.facebook.com/Misslindaandrews"><img class="facelogo" src=""></a>
	<a href="https://www.instagram.com/lindaandrewsmusic/"><img class="instalogo" src=""></a>
	<a href="https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM"><img class="spotlogo" src=""></a>
	<a href="https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w"><img class="ytlogo" src=""></a>
</div>

</main>
<?php
get_footer();