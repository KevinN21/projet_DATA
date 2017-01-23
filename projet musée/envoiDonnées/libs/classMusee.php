<?php

class musee{

	function __construct(){
		 try{
	  		$this->dbh = new PDO("mysql:host=$hostname;dbname=quentinp",$username,$password);
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
			$id=$data['id'];
		return $id;
	}
	function GetById($id){
		 $sql = "SELECT * FROM MUSEE WHERE id=".$id;

		 $sth = $this->dbh->query($sql);// à changer
		 $data = $sth->fetch(PDO::FETCH_ASSOC);

    	 return $data;
    }
    
}





?>