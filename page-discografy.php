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

<article class="projektarticle">
    <h1 class="projekttitle"></h1>
    <p class="projekttekst"></p>
    <!-- <img class="holdbillede" src="" alt=""> -->



    <!-- <h1></h1> -->
    <!-- <p class="holdtekst"></p> -->

</article>
</template>

  <!-- <nav id="seniorholdmenu"><button data-seniorhold="alle">Alle</button></nav> -->
  <nav id="seniorholdmenu"></nav>

<section id="seniorhold-oversigt"></section>
  
 
<script>
    let projekter;
    let categories;
     // kategorien "alle" har id'en 20
    let filterProjekter =20;
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
        document.querySelector("#seniorholdmenu").innerHTML += `<button class="filter" data-seniorhold="${cat.id}">${cat.name}</button>`

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
            klon.querySelector(".projekttitle").textContent = projekt.overskrift-singles;
            klon.querySelector(".projektarticle").addEventListener("click", ()=> {location.href = projekt.link; })
            liste.appendChild(klon);
            }
        })
    }
              getJson();     
</script>



<?php
get_footer();
