<?php
	// To Show Errors
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	// To Show Errors
	

	$location = $_POST['location'];
	#echo $location;exit;

	$key = '7c96ff47182447519a0170758232104';
	$url = "http://api.weatherapi.com/v1/forecast.json?key=$key&q=$location&days=7&aqi=no&alerts=no";
	 
	// Initialize a CURL session.
	$ch = curl_init();	 
	// Return Page contents.
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	 
	//grab URL and pass it to the variable.
	curl_setopt($ch, CURLOPT_URL, $url);	 
	$result = curl_exec($ch);

	$data = json_decode($result);
	#print_r($data);#exit;

	$error = $location = $current = $forecastday = $day0 =  $day1 =  $day2 =  $day3 =  $day4 =  $day5 =  $day6 = array();
	foreach ($data as $key => $value) {
		// print_r($key);
		// echo " : " ;
		// print_r($value);		
		// echo "\n\n";
		$forecastday = @$value->forecastday;
		if ($key == 'current') {
			$current = @$value;
		}
		if ($key == 'location') {
			$location = @$value;
		}	
		if ($key == 'error') {
			$error = @$value;
		}		
	}
	// print_r($error);
	// print_r($location);
	// print_r($current);
	// print_r($forecastday);
	
	if ($forecastday) {

		foreach ($forecastday as $key => $value) {
			if ($key == 0) {
				$day0 = @$value;
			}
			if ($key == 1) {
				$day1 = @$value;
			}
			if ($key == 2) {
				$day2 = @$value;
			}
			if ($key == 3) {
				$day3 = @$value;
			}
			if ($key == 4) {
				$day4 = @$value;
			}
			if ($key == 5) {
				$day5 = @$value;
			}
			if ($key == 6) {
				$day6 = @$value;
			}
		}
	}

	// print_r($day0);
	// print_r($day1);
	#exit;

	$res = array('error' => $error, 'location' => $location, 'current' => $current, 'day0' => $day0, 'day1' => $day1, 'day2' => $day2, 'day3' => $day3, 'day4' => $day4, 'day5' => $day5, 'day6' => $day6); 
	#print_r($res);exit;
	print json_encode($res);exit;

?>
