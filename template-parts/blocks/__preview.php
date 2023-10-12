<?php
$preview_mode = false;
if( !empty($block['data']['is_example']) && $block['data']['is_example'] === true ) {

	$file = YD_themeImage('blocks/' . basename($block['name']) . '.jpg');
	echo sprintf('<img src="%s" />', $file );


	$preview_mode = true;
}