<?php
/**
 * Generic Footer template.
 *
 * @package ClassiPress\Templates
 * @author  AppThemes
 * @since   ClassiPress 1.0
 */

global $cp_options;
?>

<div class="footer">

	<div class="footer_menu">

		<div class="footer_menu_res">

			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false, 'menu_id' => 'footer-nav-menu', 'depth' => 1, 'fallback_cb' => false ) ); ?>

			<div class="clr"></div>

		</div><!-- /footer_menu_res -->

	</div><!-- /footer_menu -->

	<div class="footer_main">

		<div class="footer_main_res">

			<div class="dotted">

					<?php if ( ! dynamic_sidebar( 'sidebar_footer' ) ) : ?> <!-- no dynamic sidebar so don't do anything --> <?php endif; ?>

					<div class="clr"></div>

			</div><!-- /dotted -->
<center> <p>Antalya'nın tek ve gerçek <a href="http://www.antalyadolmus.com/"><span style="color: #ff0000;"><strong>Antalya Escort</strong></span></a> Sitesi kuruluş itibariyle en güvenilir ilanları sizlerle paylaşmakta. Bizlerle paylaşılan ve <a href="http://www.antalyadolmus.com/"><span style="color: #ff0000;"><strong>Antalya Escort Bayanlar</strong></span></a>'lar gerçek resimler ile ilan vermektedir. Ayrıca Sitemizin +18 olduğunu hatırlatmak isteriz.
</p> </center><p>
			<?php _e( 'All Rights Reserved.', APP_TD ); ?> <?php echo date_i18n( 'Y' ); ?> 
			

			<div class="right">
			</div>

			<?php cp_website_current_time(); ?>

			<div class="clr"></div>

		</div><!-- /footer_main_res -->

	</div><!-- /footer_main -->

</div><!-- /footer -->
