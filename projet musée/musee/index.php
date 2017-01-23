<?php

	require_once "inc/libs.php";

	$router->setBasePath('/'.PREFIX_PORTAL);
	
	$router->map('GET', '/', function(){
		$index = true; 
		require __DIR__ . '/inc/controler/home.php';
	}, 'home');

	$router->map('GET', '/favoris/', function(){
		$index = true; 
		require __DIR__ . '/inc/controler/favoris.php';
	}, 'favoris');

	$router->map('GET', '/favoris/[h:id]/', function($id){
		$index = true; 
		require __DIR__ . '/inc/controler/favoris.php';
	}, 'favoris_id');





	
	$match = $router->match();


	// call closure or throw 404 status
	if( $match && is_callable( $match['target'] ) ) {
			$mustache_options =  array('extension' => EXT_MU_TPL);
			if($match['name'] != 'apercuAjax'){
				
				//callHeader($m, array('HREF' => 'css/style.css'));
			}
			
			call_user_func_array( $match['target'], $match['params'] );
	} else {
			// no route was matched
			header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
	}