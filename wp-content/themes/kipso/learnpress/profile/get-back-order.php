<?php
/**
 * Template for displaying form allow user get back their order by the key.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/profile/mobile-menu.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( ! $order->is_guest() ) {
	return;
} ?>

<div>
    <p><?php echo esc_html__( 'This order was checked out by you but there is no user was assigned to.', 'kipso' ); ?></p>
    <p><?php echo esc_html__( 'If the order is made for another one, you can send the code below to them.', 'kipso' ); ?></p>
    <p><?php echo esc_html__( 'If the order is made for yourself, you can assign it to you here.', 'kipso' ); ?></p>
</div>

<?php learn_press_get_template( 'order/retrieve.php', array( 'order' => $order ) ); ?>
