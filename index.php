<?php
/* David Hobbs H00251314
 Portal Aggregator website.
 F28WP Web programming


*/
ini_set('display_errors', 1); //this code block displays php errors such as incorrect syntax, functions that have not worked correctly etc.
error_reporting(E_ALL);

include('includes/head.html'); //include html head MVC technique


// openweather map APIs

//curent weather
$url="http://api.openweathermap.org/data/2.5/weather?id=2650225&lang=en&units=metric&APPID=85ba47ce17ec775d10fa327e78ffa804";
		$json=file_get_contents($url); //this function uses the url to query the API endpoint for specfific JSON data


		$data=json_decode($json,true);// JSON data is converted into an array so data can be accessed using array indexes.

include('includes/layout.html'); //include layout.html MVC technique.






 ?>
