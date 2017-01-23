<?php


header('Content-Type: text/html; charset=utf-8');

if(isset($index)){

	$musee = new musee();
	$data = $musee->museeFavoris();


	$mustache_options =  array('extension' => EXT_MU_TPL);
    $m = new Mustache_Engine(array(
        'loader' => new Mustache_Loader_FilesystemLoader(FOLD_TEMPLATE, $mustache_options),
    ));

	echo $m->render('favoris',
							array(
							'LIST'=>$data));

}