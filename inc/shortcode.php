<?php

function myshortcode($atts, $content){
	extract ( shortcode_atts(array(
		'color'=>'blue',
		'size'=>'20px'
	),$atts));
	$content = do_shortcode($content);
	return "<p style='color: ".$color."; font-size:" .$size ."'>$content</p>";
}
add_shortcode('hello','myshortcode');

function myanother($atts, $content){
	extract ( shortcode_atts(array(
		'color'=>'green',
		'size'=>'10px'
	),$atts));
	$content = do_shortcode($content);
	return "<p style='color: ".$color."; font-size:" .$size ."'>$content</p>";
}
add_shortcode('another','myshortcode');

function myButton($atts){
	extract (shortcode_atts(array(
		'padding'=>'',
		'margin'=>'',
		'border'=>'',
		'background'=>'',
	),$atts));
	return "<button style='padding: ".$padding."; margin:".$margin."; border-color:".$border."; background-color:".$background."'>My Button</button>";
}
add_shortcode('button','myButton');
add_filter('widget_text','do_shortcode');

