<?php 	
/**
* 
*/
class ConnectDB 
{
	
	private $pdo;
	private static $instancia;

	public function __construct(){
		$pdo = new PDO(DRIVER.":host=".HOST.";dbname=".DBNAME.";charset=".CHARSET,USERNAME,PASSWORD);
	}
}
 ?>