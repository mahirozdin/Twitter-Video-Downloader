<?php
function get_html_output($url){
	$output = file_get_contents($url);
	return $output;
}

?>