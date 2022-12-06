<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

	</main><!-- #main -->

	<div class= "footer">
		
      <nav>
        <ul>
          <li>
            <a href="">DISCOGRAFI</a>
          </li>
          <li>
            <a href="">SOLIST</a>
          </li>
          <li>
            <a href="">ALBUM</a>
          </li>
          <li>
            <a href="">SINGLES</a>
          </li>
          <li>
            <a href="">EP*ER</a>
          </li>
		  <li>
            <a href="">FEATURE</a>
          </li>
		  <li>
            <a href="">BAND</a>
          </li>
          <li>
            <a href="">SINGLER</a>
          </li>
          <li>
            <a href="">ALBUM</a>
          </li>
          <li>
            <a href="">GOSPEL</a>
          </li>
          <li>
            <a href="">PRODUKTIONER</a>
          </li>
		  <li>
            <a href="">BOOKING</a>
          </li>
		   <li>
            <a href="">EVENTS</a>
          </li>
		   <li>
            <a href="">COACHING</a>
          </li>
		   <li>
            <a href="">EN TIME</a>
          </li>
		   <li>
            <a href="">1-1 SPARING</a>
          </li>
		   <li>
            <a href="">KLIPPEKORT</a>
          </li>
		   <li>
            <a href="">KORCOACHING</a>
          </li>
		   <li>
            <a href="">BLOG</a>
          </li>
		   <li>
            <a href="">AGE*ISM</a>
          </li> 
		  <li>
            <a href="">SEX*ISM</a>
          </li> 
		  <li>
            <a href="">BIOGRAFI</a>
          </li>
        </ul>
      </nav>
	  <div class="footer_socials">
	<a href="https://www.facebook.com/Misslindaandrews"><img class="facelogo" src=""></a>
	<a href="https://www.instagram.com/lindaandrewsmusic/"><img class="instalogo" src=""></a>
	<a href="https://open.spotify.com/artist/3URBm5pWzuvoQ8lWiItKvM"><img class="spotlogo" src=""></a>
	<a href="https://www.youtube.com/channel/UCFNO91T6Ng-7tH3pdThaM9w"><img class="ytlogo" src=""></a>
</div>
<div class="sig_logo"> 
	<a href="index.php"><img class="LA" src="signatur_linda.svg"></a>
</div>
</div>

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
