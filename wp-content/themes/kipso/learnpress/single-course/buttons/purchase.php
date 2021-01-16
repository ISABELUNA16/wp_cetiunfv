<?php
/**
 * Template for displaying Purchase button in single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/buttons/purchase.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( ! isset( $course ) ) {
	$course = learn_press_get_course();
} ?>

<?php do_action( 'learn-press/before-purchase-form' ); ?>

    <form name="purchase-course" class="purchase-course" method="post" enctype="multipart/form-data">

		<?php do_action( 'learn-press/before-purchase-button' ); ?>

        <input type="hidden" name="purchase-course" value="<?php echo esc_attr( $course->get_id() ); ?>"/>
        <input type="hidden" name="purchase-course-nonce"
               value="<?php echo esc_attr( LP_Nonce_Helper::create_course( 'purchase' ) ); ?>"/>

        <!-- <button class="lp-button button button-purchase-course">
			<?php //echo apply_filters( 'learn-press/purchase-course-button-text', esc_html__( 'Comprar este curso', 'kipso' ) ); ?>
        </button> -->
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd3eJsBcdFgf_Qg5aYRfLVU2uR9-Dv0uKy7VAZxjVPNlyowfg/viewform" target="_blank" class="lp-button button button-purchase-course">Registrarme</a>

		<?php //do_action( 'learn-press/after-purchase-button' ); ?>

    </form>

<?php do_action( 'learn-press/after-purchase-form' ); ?>