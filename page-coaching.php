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

<section id="popupsparring1">
      <div id="luksparring1">&#x2715</div>
      <article class="popuparticlesparring1">
        <h2 class="popuph2">1:1 Sparring</h2>
        <h3>Pris</h3>
        <p>wtf</p>
      </article>
    </section>

      <section id="popupsangcoaching1">
      <div id="luk8">&#x2715</div>
      <article class="popuparticlesparring">
        <h2 class="popuph2">Sangcoaching</h2>
        <h3>Pris</h3>
        <p>wtf</p>
      </article>
    </section>

      <section id="popupklippekort1">
      <div id="luk9">&#x2715</div>
      <article class="popuparticlesparring">
        <h2 class="popuph2">Klippekort</h2>
        <h3>Pris</h3>
        <p>wtf</p>
      </article>
    </section>

      <section id="popupkorcoaching1">
      <div id="luk10">&#x2715</div>
      <article class="popuparticlesparring">
        <h2 class="popuph2">Korcoaching</h2>
        <h3>Pris</h3>
        <p>wtf</p>
      </article>
    </section>

  <div class="socials">
    <a href=https://www.facebook.com/Misslindaandrews><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-fb.svg" alt="facebook-icon"></a>
    <a href=https://www.instagram.com/lindaandrewsmusic><img class="instalogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-ig.svg" alt="instagram-icon"></a>
    <a href=https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM><img class="spotlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-spot.svg" alt="spotify-icon"></a>
    <a href=https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w><img class="ytlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-yt.svg" alt="youtube-icon"></a>
    
  </div>

<div class="booking-grid_1-1-1-1"> 

<div id="optionsparring1">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/1-1.webp" alt="1:1-sparring">
<h3 class="option-titel">1:1 SPARING </h3>
<h3 class="option-pris"> 750kr </h3>
<p class="option beskrivelse"> En times personlig sparring med mig... </p>
</div>

<div id="optionsangcoaching1">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/coaching.webp" alt="Sangcoaching">
<h3 class="option-titel">SANGCOACHING</h3>
<h3 class="option-pris"> 750kr </h3>
<p class="option beskrivelse"> En times personlig sang 
og stemme coaching..</p>
</div>

<div id="optionklippekort1">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/kor.webp" alt="Klippekort">
<h3 class="option-titel">KLIPPEKORT </h3>
<h3 class="option-pris"> 7000kr </h3>
<p class="option beskrivelse"> 10 timers personlig sang 
og stemme coaching..</p>
</div>

<div id="optionkorcoaching1">
<img class="option-img" src="<?php echo get_stylesheet_directory_uri() ?>/kor-coach.webp" alt="Kor Coaching">
<h3 class="option-titel">KOR COACHING </h3>
<h3 class="option-pris"> 1000kr </h3>
<p class="option beskrivelse"> En times undervisning til hele dit kor..</p>
</div>
</div>




</main>
 <script>

   document.querySelector("#optionsparring1").addEventListener("click", () => (popupsparring1.style.display = "block"));
      document.querySelector("#luksparring1").addEventListener("click", () => (popupsparring1.style.display = "none"));

          document.querySelector("#optionsangcoaching1").addEventListener("click", () => (popupsangcoaching1.style.display = "block"));
      document.querySelector("#luk8").addEventListener("click", () => (popupsangcoaching1.style.display = "none"));

          document.querySelector("#optionklippekort1").addEventListener("click", () => (popupklippekort1.style.display = "block"));
      document.querySelector("#luk9").addEventListener("click", () => (popupklippekort1.style.display = "none"));

          document.querySelector("#optionkorcoaching1").addEventListener("click", () => (popupkorcoaching1.style.display = "block"));
      document.querySelector("#luk10").addEventListener("click", () => (popupkorcoaching1.style.display = "none"));

      // const endpoint = "https://sarahduarte.dk/kea/10_eksamen/wp-json/wp/v2/option";
      
      // async function hentData() {
      //   const resspons = await fetch(endpoint);
      //   const json = await resspons.json();
      //   vis(json);
      // }

      // const main = document.querySelector("#holder");
      // const template = document.querySelector("template").content;

      // function vis(json) {
      //   json.forEach((person) => {
      //     console.log(person);
      //     const klon = template.cloneNode(true);
      //     klon.querySelector(".billede").src = "billede/" + person.billede;
      //     klon.querySelector(".titel").textContent = person.fornavn + "" + person.efternavn;
      //     klon.querySelector(".pris").textContent = person.email;
      //     klon.querySelector(".kort beskrivelse").textContent = person.titel;
      //     klon.querySelector(".lang beskrivelse").textContent = person.titel.renderen;
      //     main.appendChild(klon);
      //   });
      // }

      // hentData();


     
    </script>
<?php
get_footer();