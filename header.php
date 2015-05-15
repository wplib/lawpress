<?php
/**
 * The header template
 *
 * @var LawPress $theme
 */

?><!DOCTYPE html>
<html <?php $theme->the_html_attributes(); ?>>
<head>
	<?php $theme->the_meta_charset_html(); ?>
	<?php $theme->the_page_title_html(); ?>
	<?php $theme->the_meta_viewport_html( array(
		'width'         => 'device-width',
		'initial-scale' => '1.0',
		'user-scalable' => '0',
		'minimum-scale' => '1.0',
		'maximum-scale' => '1.0',
	)); ?>
	<?php $theme->the_wp_head_html(); ?>
</head>
<body <?php $theme->the_body_attributes(); ?>>

<div id="content">
