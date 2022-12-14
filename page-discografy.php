<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>



<template>
<div class="mainogsocialgrid">

<article class="projektarticle">
    <!-- <h1 class="projekttitle"></h1> -->
    <div class="punkter">
    <p class="projekttekst"></p>
    <p class="projekttekst2"></p>
    <p class="projekttekst3"></p>
    <p class="projekttekst4"></p>
    <p class="projekttekst5"></p>
     <p class="projekttekst6"></p>
      <p class="projekttekst7"></p>
      <p class="projekttekst8"></p>
      <p class="projekttekst9"></p>
      <p class="projekttekst10"></p>
            <p class="projekttekst11"></p>

    </div>
</article>

    <!-- <img class="holdbillede" src="" alt=""> -->



    <!-- <h1></h1> -->
    <!-- <p class="holdtekst"></p> -->


</template>

<!-- <div class="socials">
   <a href=https://www.facebook.com/Misslindaandrews><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-fb.svg" alt="facebook-icon"></a>
    <a href=https://www.instagram.com/lindaandrewsmusic><img class="instalogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-ig.svg" alt="instagram-icon"></a>
    <a href=https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM><img class="spotlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-spot.svg" alt="spotify-icon"></a>
    <a href=https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w><img class="ytlogo" src="<?php echo get_stylesheet_directory_uri() ?>/brun-yt.svg" alt="youtube-icon"></a>
    
  </div> -->


  <!-- <nav id="seniorholdmenu"><button data-seniorhold="alle">Alle</button></nav> -->
  <nav id="seniorholdmenu"></nav>

<section id="seniorhold-oversigt"></section>
  
 
<script>
    let projekter;
    let categories;
     // kategorien "alle" har id'en 20
    let filterProjekter =18;
    const caturl = "http://www.listeportfolio.dk/kea/2-sem-eksamen/lindaandrews/wp-json/wp/v2/categories"
    const dburl = "http://www.listeportfolio.dk/kea/2-sem-eksamen/lindaandrews/wp-json/wp/v2/projekt?per_page=100"

    async function getJson() {
    const data = await fetch (dburl);
    const catdata = await fetch(caturl);
    categories = await catdata.json();
    projekter = await data.json();
    console.log(categories);
    console.log(projekter);
    // const alleResult = categories.find((({slug}))=>slug ==="alle")
    // console.log("alleResult",alleResult)
    // filterHold =alleResult.id;

    visProjekter();
    opretknapper();
}

function opretknapper(){

    categories.forEach(cat =>{
        document.querySelector("#seniorholdmenu").innerHTML += `<button class="filter" data-projekt="${cat.id}">${cat.name}</button>`

    })

    addEventListenersToButtons();
}
    function addEventListenersToButtons(){
        document.querySelectorAll("#seniorholdmenu button").forEach(elm =>{
            elm.addEventListener("click", filtrering);
        })
    }

    function filtrering(){
        // let filterRet;
        filterProjekter = this.dataset.projekt;

        visProjekter();
    }

    function visProjekter() {
        let liste = document.querySelector("#seniorhold-oversigt");
        let skabelon = document.querySelector("template");
        liste.innerHTML = "";
        projekter.forEach(projekt => {
            
            if ( projekt.categories.includes(parseInt(filterProjekter))){
            const klon = skabelon.cloneNode(true).content;
            // klon.querySelector(".holdbillede").src = seniorhold.formular.guid;
            // klon.querySelector(".projekttitle").textContent = projekt.title.rendered;
            // klon.querySelector(".projekttitle").textContent = projekt.overskrift;
            klon.querySelector(".projekttekst").textContent = projekt.tekst;
            klon.querySelector(".projekttekst2").textContent = projekt.tekst2;
            klon.querySelector(".projekttekst3").textContent = projekt.tekst3;
            klon.querySelector(".projekttekst4").textContent = projekt.tekst4;
            klon.querySelector(".projekttekst5").textContent = projekt.tekst5;
            klon.querySelector(".projekttekst6").textContent = projekt.tekst6;
            klon.querySelector(".projekttekst7").textContent = projekt.tekst7;
            klon.querySelector(".projekttekst8").textContent = projekt.tekst8;
            klon.querySelector(".projekttekst9").textContent = projekt.tekst9;
            klon.querySelector(".projekttekst10").textContent = projekt.tekst10;
                        klon.querySelector(".projekttekst11").textContent = projekt.tekst11;



            klon.querySelector(".projektarticle").addEventListener("click", ()=> {location.href = projekt.link; })
            liste.appendChild(klon);
            }
        })
    }
              getJson();     
</script>



<?php
get_footer();
