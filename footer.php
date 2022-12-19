<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

	</main><!-- #main -->


	<main class= "footer">
			<!-- siteoversigt 
      <nav>
        <ul class="site-oversigt-liste">
          <div class="col">
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy/">DISCOGRAFI</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-solist/">SOLIST</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-solist/">ALBUM</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-solist/">SINGLES</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-solist/">EP*ER</a>
          </li>
		  <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-solist/">FEATURE</a>

          </li>
          </div>
          <div class="col">
		  <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-band/">BAND</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-band/">SINGLER</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-band/">ALBUM</a>
          </li>
          </div>
          <div class="col">
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-gospel/">GOSPEL</a>
          </li>
          <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/discografy-gospel/">PRODUKTIONER</a>
          </li>
          </div>
          <div class="col-4">
		  <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/booking/">BOOKING</a>
          </li>
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/events/">EVENTS</a>
          
          </li>
</div>
<div class="col">
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/coaching/">COACHING</a>
          </li>
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/coaching/">EN TIME</a>
          </li>
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/coaching/">1-1 SPARING</a>
          </li>
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/coaching/">KLIPPEKORT</a>
          </li>
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/coaching/">KORCOACHING</a>
            
          </li>
          </div>
          <div class="col">
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/blog/">BLOG</a>
          </li>
		   <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/blog/">AGE*ISM</a>
          </li> 
		  <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/blog/">SEX*ISM</a>

          </li> 
</div>
<div class="col">
		  <li>
            <a href="https://sarahduarte.dk/kea/10_eksamen/biografy/">BIOGRAFI</a>
          </li>
          </div>
        </ul>

      </nav> -->

     <!-- signatur logo-->
<div class="footerlogocon">
   <a href=https://sarahduarte.dk/kea/10_eksamen/forside><img class="linda-logo-footer" src="<?php echo get_stylesheet_directory_uri() ?>/signatur-linda-brun.svg" alt="linda-logo"></a>
</div>




	 <!--media iconer-->
	  <div class="footer-socials">
    <a href=https://www.facebook.com/Misslindaandrews><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/orange-fb.svg" alt="facebook-icon"></a>
    <a href=https://www.instagram.com/lindaandrewsmusic><img class="instalogo" src="<?php echo get_stylesheet_directory_uri() ?>/orange-ig.svg" alt="instagram-icon"></a>
    <a href=https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM><img class="spotlogo" src="<?php echo get_stylesheet_directory_uri() ?>/orange-spot.svg" alt="spotify-icon"></a>
    <a href=https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w><img class="ytlogo" src="<?php echo get_stylesheet_directory_uri() ?>/orange-yt.svg" alt="youtube-icon"></a>
    
  </div>

   <!--titler-->
  <div class="f-titler">
    <p class="f-p"> LINDA ANDREWS </p>
    <p class="f-p"> SANGERINDE </p>
    <p class="f-p"> PERFORMER </p>
    <p class="f-p"> SANG COACH </p>
    <p class="f-p"> KORDIRIGENT</p>
</div>

<!--kontakt-->

  <p class="email">Booking:mail@lindaandrews.dk</p>

</main>

	<?php do_action( 'ocean_after_main' ); ?>

	<?php do_action( 'ocean_before_footer' ); ?>

	<?php
	// Elementor `footer` location.
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
		?>

		<?php do_action( 'ocean_footer' ); ?>

	<?php } ?>

	<?php do_action( 'ocean_after_footer' ); ?>

</div><!-- #wrap -->

<?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer.
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
	get_template_part( 'partials/scroll-top' );
}
?>

<?php
// Search overlay style.
if ( 'overlay' === oceanwp_menu_search_style() ) {
	get_template_part( 'partials/header/search-overlay' );
}
?>

<?php
// If sidebar mobile menu style.
if ( 'sidebar' === oceanwp_mobile_menu_style() ) {

	// Mobile panel close button.
	if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
		get_template_part( 'partials/mobile/mobile-sidr-close' );
	}
	?>

	<?php
	// Mobile Menu (if defined).
	get_template_part( 'partials/mobile/mobile-nav' );
	?>

	<?php
	// Mobile search form.
	if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
		ob_start();
		get_template_part( 'partials/mobile/mobile-search' );
		echo ob_get_clean();
	}
}
?>

<?php
// If full screen mobile menu style.
if ( 'fullscreen' === oceanwp_mobile_menu_style() ) {
	get_template_part( 'partials/mobile/mobile-fullscreen' );
}
?>

<?php wp_footer(); ?> 
</body>
</html>
