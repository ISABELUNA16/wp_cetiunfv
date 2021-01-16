<?php
/**
 * Template for displaying overview tab of single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/tabs/overview.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<?php
	global $course; 
	$course_will_learn = get_post_meta( get_the_ID(), '_course_will_learn', false );
?>

<div class="course-description" id="learn-press-course-description">
	<div class="content-title"><?php echo esc_html__( 'Overview', 'kipso' ) ?></div>
	<?php
	/**
	 * @deprecated
	 */
	do_action( 'learn_press_begin_single_course_description' );

	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/before-single-course-description' );

	echo wp_kses($course->get_content(), true);

	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/after-single-course-description' );

	/**
	 * @deprecated
	 */
	do_action( 'learn_press_end_single_course_description' );
	?>

	<?php if( isset($course_will_learn[0]) && $course_will_learn[0] ){ ?>
		<div class="course-will-learn">
			<div class="course-will-learn-title">
				<?php echo esc_html__( "Lo que aprenderás", 'kipso' ); ?>
			</div>
			<div class="lg-block-grid-2 md-block-grid-2 sm-block-grid-1 xs-block-grid-1">
			<?php foreach ($course_will_learn[0] as $item) { ?>
				<div class="item-columns item">
					<span class="icon"><i class="gv-icon-2"></i></span>
					<span class="text"><?php echo wp_kses( $item, true ) ?></span>
				</div>
			<?php } ?>
			</div>
		</div>
	<?php } ?>	

</div>