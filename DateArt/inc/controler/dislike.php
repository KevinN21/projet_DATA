<?php 

if(isset($index)){
	$user = 1;

	$musee = new musee();
	$musee->dislike($id, $user);
}