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
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-discografy.css ">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-blog.css ">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style-booking.css ">


	<!-- kode til google fonte

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,200&display=swap" rel="stylesheet">
-->


</head>

<body 

 <header>
      
      <nav>
        <ul class="hovedmenu">
          <li>
            <a href="http://www.listeportfolio.dk/kea/2-sem-eksamen/lindaandrews/discografy/">DISKOGRAFI</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/blog/">BLOG</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/biografy/">BIOGRAFI</a>
          </li>
		  <div class="logo">
        <a href=https://sarahduarte.dk/kea/10_eksamen/forside><img class="linda-logo" src="<?php echo get_stylesheet_directory_uri() ?>/linda-logo.svg" alt="linda-logo"></a>
        
      </div>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/booking/">BOOKING</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/events/">EVENTS</a>
          </li>
		  <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/coaching/">COACHING</a>
          </li>
        </ul>
      </nav>
    </header>



