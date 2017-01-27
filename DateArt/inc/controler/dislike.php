<?php

if(isset($index)){
	$user = new user();
	if($u = $user->userConnected()){
	
		$musee = new musee();
		$musee->dislike($id, $u['id']);

		$data = $musee->myRandom();
		echo json_encode(callTemplateReturn('museelike', $data));
	}
}
