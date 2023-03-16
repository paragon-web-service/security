<?php
/**
 * Template for displaying curriculum tab of single course v2.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  4.1.5
 */

defined( 'ABSPATH' ) || exit();

// PARAM: section_item, course_item, can_view_item, user, course_id is required.
// $course_item : as lesson, quiz....
/**
 * @var LP_Model_User_Can_View_Course_Item $can_view_item
 * @var LP_Course_Item $course_item
 */
if ( empty( $section_item ) || empty( $course_item ) || empty( $can_view_item ) || empty( $course_id ) ) {
	return;
}

$post_type = str_replace( 'lp_', '', $course_item->get_post_type() );
$course    = learn_press_get_course( $course_id );
if ( ! $course ) {
	return;
}

$section_id = LP_Section_DB::getInstance()->get_section_id_by_item_id( $section_item['ID'] );
$section    = $course->get_sections( 'object', $section_id );
if ( ! $section instanceof LP_Course_Section ) {
	return;
}
?>
<li class="<?php echo implode( ' ', $course_item->get_class_v2( $course_id, $section_item['ID'], $can_view_item ) ); ?>" data-id="<?php echo esc_attr( $section_item['ID'] ); ?>">
	<div class="meta-left">
		<?php do_action( 'learn_press_before_section_item_title', $course_item, $section_item, $course ); ?>
		<?php if ( $course_item->get_item_type() == 'lp_quiz' || $course_item->get_item_type() == 'lp_h5p' ) { ?>
			<div
				class="index"><?php echo '<span class="label">' . esc_html__( 'Quiz', 'eduma' ) . '</span>' . $section->get_position() . '.' . $key; ?></div>
		<?php } elseif ( $course_item->get_item_type() == 'lp_assignment' ) { ?>
			<div
				class="index"><?php echo '<span class="label">' . esc_html__( 'Assignment', 'eduma' ) . '</span>' . $section->get_position() . '.' . $key; ?></div>
		<?php } else { ?>
			<div
				class="index"><?php echo '<span class="label">' . esc_html__( 'Lecture', 'eduma' ) . '</span>' . $section->get_position() . '.' . $key; ?></div>
		<?php } ?>
	</div>
	<?php
	// $item_link = $can_view_item->flag ? $course_item->get_permalink() : false;
	// $item_link = apply_filters( 'learn-press/section-item-permalink', $item_link, $course_item, $section_item, $course );
	?>

	<a class="<?php echo $post_type; ?>-title course-item-title button-load-item" href="<?php echo $course_item->get_permalink(); ?>">
		<?php
			do_action( 'learn-press/before-section-loop-item-title', $course_item, $section_item, $course );

			learn_press_get_template(
				'single-course/section/' . $course_item->get_template(),
				array(
					'item'    => $course_item,
					'section' => $section_item,
				)
			);

			?>
	</a>
	<?php
	do_action( 'learn-press/after-section-loop-item-title', $course_item, $section_item, $course );
	do_action( 'learn-press/after-section-loop-item', $course_item, $section_item, $course );
	?>
</li>
