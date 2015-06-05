<?php

/**
 * LawPress_Publication
 *
 * @property LawPress_Publication_Model $model
 * @property LawPress_Publication_View $view
 * @mixin LawPress_Publication_Model
 * @mixin LawPress_Publication_View
 *
 * @method void the_title_link()
 *
 */
class LawPress_Publication extends WPLib_Post_Base {

	const POST_TYPE = LawPress_Publications::POST_TYPE;

}

