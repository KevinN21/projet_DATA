<?php

header('Content-Type: text/html; charset=utf-8');

if(isset($index)){

	$musee = new musee();

	$id = $musee->myRandom();
	$data = $musee->GetById($id);


	$data['nom_musee'] = utf8_encode($data['nom_musee']);
	$data['ville'] = utf8_encode($data['ville']);


	$mustache_options =  array('extension' => EXT_MU_TPL);
    $m = new Mustache_Engine(array(
        'loader' => new Mustache_Loader_FilesystemLoader(FOLD_TEMPLATE, $mustache_options),
    ));

	echo $m->render('home', $data);

}