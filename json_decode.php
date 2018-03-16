<?php

	$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
	echo"<pre>";
	print_r(json_decode($json));

	//convert json to array or stdClass object;

	$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
	echo"<pre>";
	print_r(json_decode($json,1));