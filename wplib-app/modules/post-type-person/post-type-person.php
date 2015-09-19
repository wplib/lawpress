<?php

/**
 * Class LawPress_People
 * @static LawPress_Person[] get_list()
 */
class LawPress_People extends WPLib_Post_Module_Base {

	const POST_TYPE = 'lp_person';

	const INSTANCE_CLASS = 'LawPress_Person';

	static function on_load() {

		self::register_helper( __CLASS__, 'LawPress' );

		$labels = self::register_post_type_labels( array(
			'name'          => __( 'People', 'lawpress' ),
			'singular_name' => __( 'Person', 'lawpress' ),
			'menu_name'     => __( 'People', 'lawpress' ),
		));

		self::register_post_type( array(
			'label'         => __( 'Person', 'lawpress' ),
			'labels'        => $labels,
			'public'        => true,
			'menu_icon'     => 'dashicons-admin-users',
			'supports'      => array(
				'title',
				'editor',
			),
		));

	}


}

