<?php

/**
 * Class LawPress_Events
 *
 * @mixin LawPress_Event
 *
 * @static LawPress_Event[] get_list()
 */
class LawPress_Events extends WPLib_Post_Module_Base {

	const POST_TYPE = 'lp_event';

	static function on_load() {

		$labels = self::register_post_type_labels( array(
			'name'          => __( 'Events', 'wplib' ),
			'singular_name' => __( 'Event', 'wplib' ),
		));

		self::register_post_type( array(
			'label'         => __( 'Events', 'wplib' ),
			'labels'        => $labels,
			'public'        => true,
			'menu_icon'     => 'dashicons-calendar-alt',
			'supports'      => array(
				'title',
				'editor',
			),
		));

	}

}
LawPress_Events::on_load();
