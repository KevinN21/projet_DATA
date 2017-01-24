<?php
if(isset($index)){
$musee = new musee();
	$data=$musee->GetById($id);
	callTemplate("musee",$data);

}
