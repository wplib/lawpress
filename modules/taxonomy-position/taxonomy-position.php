<?php

/**
 * Class LawPress_Positions
 */
class LawPress_Positions extends WPLib_Term_Module_Base {

	const TAXONOMY = 'lp_position';

	static function on_load() {

		$labels = self::register_taxonomy_labels( array(

			'name'          => __( 'Positions',  'lawpress' ),
			'singular_name' => __( 'Position',   'lawpress' ),
			'menu_name'     => __( 'Positions',  'lawpress' ),

		));

		self::register_taxonomy( LawPress_People::POST_TYPE, array(

			'label'              => __( 'Positions', 'lawpress' ),
			'labels'             => $labels,
			'public'             => true,
			//'menu_icon'          => 'dashicons-admin-users',
			'menu_position'      => 10,
			'has_archive'        => true,
			'supports'           => array(
				'author',
				'title',
				'editor',
				'comments',
			),

		));

	}

}
LawPress_Positions::on_load();
