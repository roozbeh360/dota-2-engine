<?php

require_once 'engine.php' ;

// both api and api test is down !
// test it on you local file 
// change action/config/config.php to use local file 

$doProcess = new doProcess();
$match = $doProcess->fetchMatchDetailsById(76495264);

if($match){
	
$players =  $match->getPlayers();
foreach($players as $player)
{
	echo $player->getHero()->getName() .'<br />';
}

echo '<br />' ;
}
else echo 'not found' ; 
echo '</br>';

