<?php

/**
 * Class LawPress
 */
class LawPress extends WPLib_Theme_Base {

	static function on_load() {

		self::register_module( 'people' );
		self::register_module( 'practice-areas' );

	}

}
LawPress::on_load();
