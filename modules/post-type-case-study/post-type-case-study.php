<?php

/**
 * Class LawPress_Case_Studies
 *
 * @mixin LawPress_Case_Study
 *
 * @static LawPress_Case_Study[] get_list()
 */
class LawPress_Case_Studies extends WPLib_Post_Module_Base {

	const POST_TYPE = 'lp_case_study';

	static function on_load() {

		$labels = self::register_post_type_labels( array(
			'name'          => __( 'Case Studies', 'wplib' ),
			'singular_name' => __( 'Case Study', 'wplib' ),
		));

		self::register_post_type( array(
			'label'         => __( 'Case Studies', 'wplib' ),
			'labels'        => $labels,
			'public'        => true,
			'menu_icon'     => 'dashicons-portfolio',
			'supports'      => array(
				'title',
				'editor',
			),
		));

	}

}
LawPress_Case_Studies::on_load();
