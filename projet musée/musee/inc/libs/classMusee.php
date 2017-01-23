<?php

class musee{

	function __construct(){
		 try{
	  		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DATA.";charset=UTF8",DB_USER,DB_PASS);
	  	}
	  	catch(PDOException $e)
	    {
	  	 echo $e->getMessage();
	    }
	}

	function myRandom(){
		$sql="SELECT * FROM MUSEE ORDER BY rand() LIMIT 1";
		$sth = $this->dbh->query($sql);

		$data= $sth->fetch(PDO::FETCH_ASSOC);
			
		return $data;
	}
	function GetById($id){
		 $sql = "SELECT * FROM MUSEE WHERE id=".$id;

		 $sth = $this->dbh->query($sql);// à changer
		 $data = $sth->fetch(PDO::FETCH_ASSOC);

    	 return $data;
    }
    

	function museeFavoris(){

		 $sql="SELECT * FROM MUSEE INNER JOIN MUSEE_FAV ON MUSEE.id=id_musee WHERE id_user=1";
		 $sth = $this->dbh->query($sql);
		 $data = $sth->fetchAll(PDO::FETCH_ASSOC);
		 
	return $data;
		 
	}

}



