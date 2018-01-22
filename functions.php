<?php

function getData($url) {          //Gets passed the URL of the API when the function is called
	
	global $json;                 

	$getContent = file_get_contents($url);   // Gets the contents of the API in the form of JSON

	$json = json_decode($getContent, true);  // Converts the JSON language to an associative array
}



?>