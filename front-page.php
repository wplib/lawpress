<?php
/**
 * @var LawPress $theme
 */

$theme->the_header_html();
?>

<h1>Welcome to <?php $theme->the_site_name(); ?></h1>

<p>LawPress is a demo application for <a href="http://wplib.org" target="_blank">WPLib</a>.</p>

<h2><?php _e( 'Lawyers' ); ?></h2>
<ul id="lawyer-list">
<?php
	$people = LawPress_People::get_list();
	foreach( $people as $person ) {
		/**
		 * @var LawPress_Person $person
		 */
		?><li><?php $person->the_title_link(); ?></li><?php

	}

	//LawPress_People::get_list()->the_template( 'person-card' );

?>
</ul>

<h2><?php _e( 'Practice Areas' ); ?></h2>
<ul id=""practice-area-list">
<?php
	$practice_areas = LawPress_Practice_Areas::get_list();
	foreach( $practice_areas as $practice_area ) {
		/**
		 * @var LawPress_Practice_Area $practice_area
		 */
		?><li><?php $practice_area->the_title_link(); ?></li><?php

	}
?>
</ul>

<?php
$theme->the_footer_html();
