<?php

/**
 * Class LawPress
 */
class LawPress extends WPLib_App_Base {

	static function on_load() {

		self::register_module( 'post-type-person' );
		self::register_module( 'post-type-practice-area' );
		self::register_module( 'post-type-case-study' );
		self::register_module( 'post-type-news-item' );
		self::register_module( 'post-type-event' );
		self::register_module( 'post-type-publication' );

		self::register_module( 'taxonomy-position' );

	}

}
LawPress::on_load();
