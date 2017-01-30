<?php

if(isset($index)){
	$user = new user();
	if($u = $user->userConnected()){

		$musee = new musee();
		$musee->dislike($id, $u['id']);

		$data = $musee->myRandom();
		$pos=explode(" ", $data["coordonnees"]);
		$data['positionx']=$pos[0];
		$data['positiony']=$pos[1];
		echo json_encode(callTemplateReturn('museelike', $data));
	}
}
