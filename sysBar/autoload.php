<?php

function myAutoload($className){
	$paths = [
		'./app/',
		'./app/models/',
		'./app/views/',
		'./app/controllers/'
	];
	foreach($paths as $path){
		$dir = $path.$className.'.php';
		if(file_exists($dir)){
			include_once $dir;
		}
	}
	
}
spl_autoload_register('myAutoload');
	