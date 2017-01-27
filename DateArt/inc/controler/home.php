<?php

header('Content-Type: text/html; charset=utf-8');

if(isset($index)){

	$user = new user();
	if($u = $user->userConnected()){
	
		$musee = new musee();

		$data = $musee->myRandom();
		$data = array_merge($data, array('SHOW' => true));
		
		//$data = array_push($data, array('URL' => URL_PORTAL));
	}
	else{
		$data = array('SHOW' => false);
	}
	callTemplate("home", $data);

}
