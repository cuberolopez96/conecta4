<?php 
/**
* 
*/
class Moves
{
	
	public function findByGame($idGame){
		$pdo = ConnectDB::getInstance();
		$moves = $pdo->prepare("SELECT * FROM moves WHERE games=:idGames");
		$moves->bindParam(":idGames",$idGame);
		$moves->execute();
		return $moves->fetchAll();
	}
}
 ?>