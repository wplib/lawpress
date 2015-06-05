<?php

/**
 * Class LawPress_Publications
 *
 * @mixin LawPress_Publication
 *
 * @static LawPress_Publication[] get_list()
 */
class LawPress_Publications extends WPLib_Post_Module_Base {

	const POST_TYPE = 'lp_publication';

	static function on_load() {

		$labels = self::register_post_type_labels( array(
			'name'          => __( 'Publications', 'wplib' ),
			'singular_name' => __( 'Publication', 'wplib' ),
		));

		self::register_post_type( array(
			'label'         => __( 'Publications', 'wplib' ),
			'labels'        => $labels,
			'public'        => true,
			'menu_icon'     => 'dashicons-media-spreadsheet',
			'menu_position' => 32,
			'supports'      => array(
				'title',
				'editor',
			),
		));

	}

}
LawPress_Publications::on_load();
