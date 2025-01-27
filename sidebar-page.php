<?php
/**
 * http://antalyadakiaksekililer.com - EscortTemaClass
 */
?>

<!-- right block -->
<div class="content_right">

	<?php appthemes_before_sidebar_widgets( 'page' ); ?>

	<?php if ( ! dynamic_sidebar( 'sidebar_page' ) ) : ?>

		<!-- no dynamic sidebar setup -->

		<div class="shadowblock_out">

			<div class="shadowblock">

				<h2 class="dotted"><?php _e( 'Meta', APP_TD ); ?></h2>

					<ul>

						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>

					</ul>

				<div class="clr"></div>

			</div><!-- /shadowblock -->

		</div><!-- /shadowblock_out -->

	<?php endif; ?>

	<?php appthemes_after_sidebar_widgets( 'page' ); ?>

</div><!-- /content_right -->
