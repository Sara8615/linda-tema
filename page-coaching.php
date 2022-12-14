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

<div class="booking-grid_1-1-1-1"> 

<div class="option>
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="1:1-sparring">
<h3 class="option-titel">1:1 SPARING </h3>
<h3 class="option-pris"> 750kr </h3>
<p class="option beskrivelse"> En times personlig sparring ... </p>
</div>

<div class="option>
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="Sangcoaching">
<h3 class="option-titel">SANGCOACHING</h3>
<h3 class="option-pris"> 750kr </h3>
<p class="option beskrivelse"> En times personlig sang 
og stemme coaching..</p>
</div>

<div class="option>
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="Klippekort">
<h3 class="option-titel">KLIPPEKORT </h3>
<h3 class="option-pris"> 7000kr </h3>
<p class="option beskrivelse"> 10 timers personlig sang 
og stemme coaching..</p>
</div>

<div class="option>
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="Kor Coaching">
<h3 class="option-titel">KOR COACHING </h3>
<h3 class="option-pris"> 1000kr </h3>
<p class="option beskrivelse"> En times undervisning til hele dit kor..</p>
</div>
</div>




</main>
 <script>
      const endpoint = "https://sarahduarte.dk/kea/10_eksamen/wp-json/wp/v2/option";
      
      async function hentData() {
        const resspons = await fetch(endpoint);
        const json = await resspons.json();
        vis(json);
      }

      const main = document.querySelector("#holder");
      const template = document.querySelector("template").content;

      function vis(json) {
        json.forEach((person) => {
          console.log(person);
          const klon = template.cloneNode(true);
          klon.querySelector(".billede").src = "billede/" + person.billede;
          klon.querySelector(".titel").textContent = person.fornavn + "" + person.efternavn;
          klon.querySelector(".pris").textContent = person.email;
          klon.querySelector(".kort beskrivelse").textContent = person.titel;
          klon.querySelector(".lang beskrivelse").textContent = person.titel.renderen;
          main.appendChild(klon);
        });
      }

      hentData();
    </script>
<?php
get_footer();