<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css ">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-blog.css ">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-booking.css ">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-events.css ">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-biografi.css ">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-discografy.css ">



	<!--kode til google fonte-->

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,200&display=swap" rel="stylesheet">



</head>

<body>

 <header>
    <div class="burger">
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
	<div class="column">
	<div class="burgergrid">		
	<a class="logocontainer" href=https://sarahduarte.dk/kea/10_eksamen/forside><img class="linda-logo-burger" src="<?php echo get_stylesheet_directory_uri() ?>/orange-linda-logo.svg" alt="linda-logo"></a>
	</div>
		<div id="logomobilmenu" class="logoburgermenu">  
				<a  class="burgerpunkt" href="https://sarahduarte.dk/kea/10_eksamen/discografy/">DISKOGRAFI</a>
				<a  class="burgerpunkt" href="https://sarahduarte.dk/kea/10_eksamen/blog/">BLOG</a>
				<a  class="burgerpunkt" href="https://sarahduarte.dk/kea/10_eksamen/biografy/">BIOGRAFI</a>
 				<a  class="burgerpunkt" href="https://sarahduarte.dk/kea/10_eksamen/booking/">BOOKING</a>
  				<a  class="burgerpunkt" href="https://sarahduarte.dk/kea/10_eksamen/events/">EVENTS</a>
    			<a  class="burgerpunkt" href="https://sarahduarte.dk/kea/10_eksamen/coaching/">COACHING</a>
		</div>
</div>

</div>
  		<nav class="navbar">
        <ul class="hovedmenu nav-menu">
			
          <li class="limenu">
            <a href="http://sarahduarte.dk/kea/10_eksamen/discografy/">DISKOGRAFI</a>
          </li>
          <li   class="limenu">
            <a href="https://sarahduarte.dk/kea/10_eksamen/blog/">BLOG</a>
          </li>
          <li  class="limenu">
            <a href="https://sarahduarte.dk/kea/10_eksamen/biografy/">BIOGRAFI</a>
          </li>
		<div class="logo limenu logodpnone">
            <a href=https://sarahduarte.dk/kea/10_eksamen/forside><img class="linda-logo" src="<?php echo get_stylesheet_directory_uri() ?>/orange-linda-logo.svg" alt="linda-logo"></a>
      	</div>

          <li class="limenu">
            <a href="https://sarahduarte.dk/kea/10_eksamen/booking/">BOOKING</a>
          </li>
          <li class="limenu">
            <a href="https://sarahduarte.dk/kea/10_eksamen/events/">EVENTS</a>
          </li>
		  <li class="limenu">
            <a href="https://sarahduarte.dk/kea/10_eksamen/coaching/">COACHING</a>
          </li>
        </ul>
	
      </nav>

	  	<script>
 	// document.querySelector("#openclose").addEventListener("click", () => (logomobilmenu.style.display = "block"));

    // document.querySelector("#openclose").addEventListener("click", () => (logomobilmenu.style.display = "none"));

 	// document.querySelector("#openclose").addEventListener("click", () => (logomobilmenu.style.display = "block"));

	// document.querySelector("#openclose").addEventListener("click", click);
	
	// function click(){
	// document.querySelector("#logomobilmenu").classList.remove("active");
	// document.querySelector("#logomobilmenu").classList.add("active");
	// }

	function myFunction() {
  var x = document.getElementById("logomobilmenu");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}

// const burger = document.querySelector(".burger");
// const menu = document.querySelector(".nav-menu");

// burger.addEventListener("click", () => {
//   burger.classList.toggle("active");
//   menu.classList.toggle("active");
// });



	</script>
    </header>







