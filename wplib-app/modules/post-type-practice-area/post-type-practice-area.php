<?php

/**
 * Class LawPress_Practice_Areas
 *
 * @mixin LawPress_Practice_Area
 *
 * @static LawPress_Practice_Area[] get_list()
 */
class LawPress_Practice_Areas extends WPLib_Post_Module_Base {

	const POST_TYPE = 'lp_practice_area';

	static function on_load() {

		$labels = self::register_post_type_labels( array(
			'name'          => __( 'Practice Areas', 'wplib' ),
			'singular_name' => __( 'Practice Area', 'wplib' ),
		));

		self::register_post_type( array(
			'label'         => __( 'Practice Areas', 'wplib' ),
			'labels'        => $labels,
			'public'        => true,
			'menu_icon'     => 'dashicons-groups',
			'supports'      => array(
				'title',
				'editor',
			),
		));

	}

}
LawPress_Practice_Areas::on_load();
