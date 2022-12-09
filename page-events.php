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
    <a href=https://www.facebook.com/Misslindaandrews><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/indset-icon" alt="facebook-icon"></a>
    <a href=https://www.instagram.com/lindaandrewsmusic><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/indset-icon" alt="facebook-icon"></a>
    <a href=https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM><img class="spotlogo" src="<?php echo get_stylesheet_directory_uri() ?>/indset-icon" alt="spotify-icon"></a>
    <a href=https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w><img class="ytlogo" src="<?php echo get_stylesheet_directory_uri() ?>/indset-icon" alt="youtube-icon"></a>
    
  </div>
  <article class="events">
    <h2 class="dato">DEC* 3</h2>

    <div class="sted">
      <h3>SKT. HANS HAVE ROSKILDE</h3>
      
    </div>
<h2 class="dato">DEC* 5</h2>

    <div class="sted">
      <h3>STAVNHOLTKIRKEN FARUM</h3>
      <h3 class="udsolgt">Udsolgt</h3>
    </div>

    <h2 class="dato">DEC*</h2>

    <div class="sted">
      <h3>PERFORMERS NIGHT LIVE</h3>
      
    </div>
    <h2 class="dato">DEC*</h2>

    <div class="sted">
      <h3>PSYKIATRISK AFDELING SUNDBY</h3>
      
    </div>
  </article>
  <img class="event-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="billede">
</main>

<?php
get_footer();
