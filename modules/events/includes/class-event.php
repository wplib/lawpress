<?php

/**
 * LawPress_Event
 *
 * @property LawPress_Event_Model $model
 * @property LawPress_Event_View $view
 * @mixin LawPress_Event_Model
 * @mixin LawPress_Event_View
 *
 * @method void the_title_link()
 *
 */
class LawPress_Event extends WPLib_Post_Base {

	const POST_TYPE = LawPress_Events::POST_TYPE;

}

