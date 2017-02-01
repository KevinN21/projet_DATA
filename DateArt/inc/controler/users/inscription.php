<?php

if(isset($index)){

	$user = new user();

	if(!$user->userConnected()){
		if(isset($_REQUEST['inscription'])){
			$res = $user->userRegister();
			(!$res['OK']) ? $show = true : $show = false;
			$res = array_merge($res, array('SHOW' => $show));
		}
		else{
			$res = array('SHOW' => true);
		}
	}
	else{
		$res = array('SHOW' => false, 'content' => 'Vous êtes connecté.');
	}

	callTemplate("users/inscription", $res);
}
