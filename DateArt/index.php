<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Date'Art</title>

    <link rel="stylesheet" href="assets//css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" href="assets/fonts/glyphicons-halflings-regular.woff">
    <link rel="stylesheet" href="assets/fonts/glyphicons-halflings-regular.woff2">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <?php require_once('template/header.html') ?>
    <main class="container">
        <section class="row">
            <div class="col-xs-12 col-sm-6 col-sm-push-3 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
                <div class="thumbnail">
                    <img src="assets/img/louvre.jpg">
                    <div class="caption">
                        <h1 class="nom-musee">MUSEE DU LOUVRE qu'il est beau</h1>
                        <h2 class="ville-musee">Paname City</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="row da-buttons">
            <div class="col-xs-6 col-xs-push-1 text-center">
                <button class="button1"><img class="red-cross" src="assets/img/red_cross.svg" alt=""></button>
            </div>
            <div class="col-xs-6 col-xs-pull-1 text-center">
                <button class="button2"><img class="green-heart" src="assets/img/green_heart.svg" alt=""></button>
            </div>
        </section>
    </main>
</body>

</html>
=======
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

	$router->map('POST', '/like/[h:id]/', function($id){
		$index = true;
		require __DIR__ . '/inc/controler/like.php';
	}, 'like');

	$router->map('POST', '/dislike/[h:id]/', function($id){
		$index = true;
		require __DIR__ . '/inc/controler/dislike.php';
	}, 'dislike');

	$router->map('GET', '/musee/[h:id]/', function($id){
		$index = true;
		require __DIR__ . '/inc/controler/musee.php';
	}, 'musee');



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
