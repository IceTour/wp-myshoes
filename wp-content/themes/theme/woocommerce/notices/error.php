<?php
/**
 * Show error messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/error.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! $messages ){
	return;
}

?>
<div class="woocommerce-error">
	<div class="close"></div>
	<ul class="no-bullet">
		<?php foreach ( $messages as $message ) : ?>
			<li><strong><?php echo wp_kses_post( $message ); ?></strong></li>
		<?php endforeach; ?>
	</ul>
</div>
