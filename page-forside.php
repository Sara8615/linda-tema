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
    <a href=https://www.facebook.com/Misslindaandrews><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/FB.svg" alt="facebook-icon"></a>
    <a href=https://www.instagram.com/lindaandrewsmusic><img class="instalogo" src="<?php echo get_stylesheet_directory_uri() ?>/insta.svg" alt="insta-icon"></a>
    <a href=https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM><img class="spotlogo" src="<?php echo get_stylesheet_directory_uri() ?>/spotify.svg" alt="spotify-icon"></a>
    <a href=https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w><img class="ytlogo" src="<?php echo get_stylesheet_directory_uri() ?>/youtube.svg" alt="youtube-icon"></a>
    
  </div>

</main>
<?php
get_footer();