<?php 
	$output = '';
	for ($count = 1; $count <= 10; $count++){
		$output .= $count . ' ';
	}
	include __DIR__ . '/../default/templates/count.html.php';
?>