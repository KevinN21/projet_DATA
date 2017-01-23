<?php

header('Content-Type: text/html; charset=utf-8');

if(isset($index)){

	$musee = new musee();

	$data = $musee->myRandom();

	$data['nom_musee'] = utf8_encode($data['nom_musee']);
	$data['ville'] = utf8_encode($data['ville']);
	//$data = array_push($data, array('URL' => URL_PORTAL));

	callTemplate("home", $data);

}
