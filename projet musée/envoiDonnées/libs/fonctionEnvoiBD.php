<?php

require_once('classMusee.php');
require_once('classFlickr.php'); 

$test=new musee();

function envoiBD($dbh,$test){
	 $id=1;
		for($i=1;$i<30;$i++){
		 $sql="SELECT * FROM MUSEE WHERE id=".$id;
		 $sth = $dbh->query($sql);
		 $data= $sth->fetch(PDO::FETCH_ASSOC);

		 $data=$test->GetById($id,$dbh);

 		 $nomMusee=$data['nom_musee'];

		 $flickr = new Flickr('223e41af0d8f730f5535ea44be64af4b'); 
		 $data = $flickr->getRandomPhoto($nomMusee); 

		 $urlImage = $data[1]->source;

		 $sqlupdate="UPDATE MUSEE SET image='".$urlImage."' WHERE id=".$id; 
		 $sth=$dbh->prepare($sqlupdate);
		 $sth->execute();

		 $id++;
		}
		  	 	
}

envoiBD($dbh,$test);

?>








<!-- 	datART
Clé :
223e41af0d8f730f5535ea44be64af4b

Secret :
6a71021ef8b2c066 -->