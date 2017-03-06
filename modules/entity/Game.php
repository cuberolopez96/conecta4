<?php 
/**
* 
*/
class Game
{
	
	public function getGames(){
		$pdo = ConnectDB::getInstance();
		$games = $pdo->prepare("SELECT * FROM games");
		$games->execute();
		return $games->fetchAll();
	}
}
 ?>