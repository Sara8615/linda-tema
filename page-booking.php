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
<!-- popupper display none -->
<section id="popupsparring">

      <div id="luk">&#x2715</div>
      <article class="popuparticle">
        <h2 class="popuph2">1:1 Sparring</h2>
        <h3>Pris</h3>
        <p>tekst</p>
      </article>
    </section>

    <section id="popup">

      <div id="luk">&#x2715</div>
      <article class="popuparticle">
        <h2 class="popuph2">Test</h2>
        <h3>Pris</h3>
        <p>tekst</p>
      </article>
    </section>

    <section id="popup">

      <div id="luk">&#x2715</div>
      <article class="popuparticle">
        <h2 class="popuph2">virker det</h2>
        <h3>Pris</h3>
        <p>tekst</p>
      </article>
    </section>


  <div class="socials">
  <a href=https://www.facebook.com/Misslindaandrews><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-fb.svg" alt="facebook-icon"></a>
    <a href=https://www.instagram.com/lindaandrewsmusic><img class="instalogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-ig.svg" alt="instagram-icon"></a>
    <a href=https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM><img class="spotlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-spot.svg" alt="spotify-icon"></a>
    <a href=https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w><img class="ytlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-yt.svg" alt="youtube-icon"></a>
  </div>

<div class="booking-grid_1-1-1-1"> 

<div id="option">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="1:1-sparring">
<h3 class="titel">1:1 SPARING </h3>
<h3 class="pris"> 750kr </h3>
<p class="beskrivelse"> En times personlig sparring ... </p>
</div>

<div class="option">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="Sangcoaching">
<h3 class="titel">SANGCOACHING</h3>
<h3 class="pris"> 750kr </h3>
<p class="beskrivelse"> En times personlig sang 
og stemme coaching..</p>
</div>

<div class="option">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="Klippekort">
<h3 class="titel">KLIPPEKORT </h3>
<h3 class="pris"> 7000kr </h3>
<p class="beskrivelse"> 10 timers personlig sang 
og stemme coaching..</p>
</div>

<div class="option">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="Kor Coaching">
<h3 class="titel">KOR COACHING </h3>
<h3 class="pris"> 1000kr </h3>
<p class="beskrivelse"> En times undervisning til hele dit kor..</p>
</div>
</div>



<div class="booking-grid_1-1-1"> 

<div class="option">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="concert">
<h3 class="titel">CONCERT </h3>
<h3 class="pris"> Spørg for pris </h3>
<p class="beskrivelse"> En times concert med mig og mit band... </p>
</div>

<div class="option">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="foredrag">
<h3 class="titel">FOREDRAG</h3>
<h3 class="pris"> Spørg for pris </h3>
<p class="beskrivelse"> En times foredrag om mit musikalske erhverv..</p>
</div>

<div class="option">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/indset-billede" alt="personlig hilsen">
<h3 class="titel">PERSONLIG HILSEN </h3>
<h3 class="pris"> Spørg for pris </h3>
<p class="beskrivelse"> Vi aftaler sammen hvilken sang + hilsen der være i videoen...</p>
</div>

</div>


</main>
 <template>
      <article>
        <img src="" alt="" class="billede" />
        <h2 class="titel"></h2>
        <p class="pris"></p>
        <p class="kort beskrivelse"></p>
        <p class="lang beskrivelse"></p>
      </article>
    </template>



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

// document.querySelector(".option").addEventListener("click", () => visData);

// function visData(){
// popup.style.display=


      document.querySelector("#option").addEventListener("click", () => (popup.style.display = "block"));
      document.querySelector("#luk").addEventListener("click", () => (popupsparring.style.display = "none"));
    </script>
<?php
get_footer();