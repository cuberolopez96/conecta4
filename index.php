<?php 
	require_once "modules/config.php";
	require_once "modules/entity/ConnectDB.php";
	require_once "modules/entity/Game.php";
	require_once "modules/entity/Moves.php";
	header("Content-type: text/xml");
	$games= Game::getGames();
 ?>
<games>
	<?php foreach ($games as $key => $game): ?>
		<game id="<?php echo $game['id'] ?>">
			<?php foreach (Moves::findByGame($game['id']) as $key => $move): ?>
				<move id="<?php echo $move['id'] ?>" x="<?php echo $move['x'] ?>" y="<?php echo $move['y'] ?>"/>
			<?php endforeach ?>
		</game>
	<?php endforeach ?>
</games>