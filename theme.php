<?php

/**
 * Class LawPress
 */
class LawPress extends WPLib_Theme_Base {

	static function on_load() {

		self::register_module( 'people' );
		self::register_module( 'practice-areas' );
		self::register_module( 'case-studies' );
		self::register_module( 'news-items' );
		self::register_module( 'events' );
		self::register_module( 'publications' );

	}

}
LawPress::on_load();
