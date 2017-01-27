<?php

if(isset($index)){
	$user = new user();
	if($u = $user->userConnected()){
	
		$musee = new musee();

		//si l'utilisateur n'a pas encore like
		if(!$musee->userFavExist($id, $u['id'])){
			$musee->like($id, $u['id']);
		}

		$data = $musee->myRandom();
		echo json_encode(callTemplateReturn('museelike', $data));
	}
}
