<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/'.$key.'/40.4168,-3.7038/?exclude=minutely?exclude=hourly';

  // get the data for the forcast
  $forecast = json_decode(file_get_contents($wather), true);

  //feels like
  $temp = $forecast['currently']['temperature'];

  if ($temp < 30){
  	$feels = 'It\'s cold outside.';
  } else if ($temp < 60) {
  	$feels = 'You should put a sweater on (:';
  } else if ($temp < 80) {
  	$feels = 'It\'s nice outside. (:';
  } else if ($temp < 100) {
  	$feels = 'It\'s warm outside.';
  } else if ($temp > 100) {
  	$feels = 'My face is burning off.';
  }