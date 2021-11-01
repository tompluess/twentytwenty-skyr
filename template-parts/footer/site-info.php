<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<?php
		printf(
			/* translators: 1: year, 2: blog name */
			__( '© %1$s by %2$s' ),
			date("Y"),
			get_bloginfo('name'),
		);
	?>
</div><!-- .site-info -->
