<?php

/**
 * Class LawPress_News_Items
 *
 * @mixin LawPress_News_Item
 *
 * @static LawPress_News_Item[] get_list()
 */
class LawPress_News_Items extends WPLib_Post_Module_Base {

	const POST_TYPE = 'lp_news_item';

	static function on_load() {

		$labels = self::register_post_type_labels( array(
			'name'          => __( 'News Items', 'wplib' ),
			'singular_name' => __( 'News Item', 'wplib' ),
		));

		self::register_post_type( array(
			'label'         => __( 'News Items', 'wplib' ),
			'labels'        => $labels,
			'public'        => true,
			'menu_icon'     => 'dashicons-media-document',
			'supports'      => array(
				'title',
				'editor',
			),
		));

	}

}
LawPress_News_Items::on_load();
