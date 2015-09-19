<?php

/**
 * Class LawPress_Person_View
 *
 * @property LawPress_Person $item
 * @method LawPress_Person_Model model()
 * @property LawPress_Person_Model $model
 *
 * @method void the_person_link( array $args )
 *
 * @mixin LawPress_Person
 *
 */
class LawPress_Person_View extends WPLib_Post_View_Base {

	function person_link( $args = array() ) {

		$attributes = WPLib::to_html_attributes( $args );

		return '<a href="' . esc_url( $this->model()->url() ) . '"' . $attributes . '>' . esc_html( $this->title() ) . '</a>';

	}

}

