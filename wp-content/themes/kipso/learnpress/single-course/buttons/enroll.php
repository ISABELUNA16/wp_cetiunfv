<?php
/**
 * Template for displaying Enroll button in single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/buttons/enroll.php.
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

<?php do_action( 'learn-press/before-enroll-form' ); ?>

    <form name="enroll-course" class="enroll-course" method="post" enctype="multipart/form-data">

		<?php do_action( 'learn-press/before-enroll-button' ); ?>

        <input type="hidden" name="enroll-course" value="<?php echo esc_attr( $course->get_id() ); ?>"/>
        <input type="hidden" name="enroll-course-nonce"
               value="<?php echo esc_attr( LP_Nonce_Helper::create_course( 'enroll' ) ); ?>"/>
<?php/*

        <button class="lp-button button button-enroll-course">
			<?php echo esc_html( apply_filters( 'learn-press/enroll-course-button-text', esc_html__( 'Enroll', 'kipso' ) ) ); ?>
        </button>*/?>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd3eJsBcdFgf_Qg5aYRfLVU2uR9-Dv0uKy7VAZxjVPNlyowfg/viewform" target="_blank" class="lp-button button button-purchase-course">Registrarme</a>

		<?php do_action( 'learn-press/after-enroll-button' ); ?>

    </form>

<?php do_action( 'learn-press/after-enroll-form' ); ?>