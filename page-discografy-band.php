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
    <div class="socials">
	<a href=https://www.facebook.com/Misslindaandrews><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-fb.svg" alt="facebook-icon"></a>
    <a href=https://www.instagram.com/lindaandrewsmusic><img class="instalogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-ig.svg" alt="instagram-icon"></a>
    <a href=https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM><img class="spotlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-spot.svg" alt="spotify-icon"></a>
    <a href=https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w><img class="ytlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-yt.svg" alt="youtube-icon"></a>
</div>
  <article class="disc_grid">
    <h2 class="album_head">ALBUM</h2>

    <div class="album_liste">
      <h3>TITEL på album - udgivelses år</h3>

    </div>

    <h2 class="single_head">SINGLER</h2>

    <div class="single_liste">
      <h3>TITEL på single - udgivelses år</h3>
      <h3>TITEL på single - udgivelses år</h3>
      <h3>TITEL på single - udgivelses år</h3>
      <h3>TITEL på single - udgivelses år</h3>

    </div>


  </article>
</main>

<?php
get_footer();
