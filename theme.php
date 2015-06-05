<?php

/**
 * Class LawPress
 */
class LawPress extends WPLib_Theme_Base {

	static function on_load() {

		self::register_module( 'post-type-person' );
		self::register_module( 'post-type-practice-area' );
		self::register_module( 'post-type-case-study' );
		self::register_module( 'post-type-news-item' );
		self::register_module( 'post-type-event' );
		self::register_module( 'post-type-publication' );

	}

}
LawPress::on_load();
