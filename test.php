<?php

require_once 'engine.php' ;

// both api and api test is down !
// test it on you local file 
// change action/config/config.php to use local file 

$doProcess = new doProcess();
$match = $doProcess->fetchMatchDetailsById(1455138);

if($match){
	
$players =  $match->getPlayers();

echo $players[9]->getAccount_id().' | '.binaryConvert::make64bit($players[9]->getAccount_id());

echo '<br />' ;


	print_r($players[9]->getHero()->getName());

echo '<br />' ;
$player = $players[9] ;
echo $player->getAccount()->getSteamid();
echo $player->getAccount()->getPersonaname();	
}
else echo 'not found' ; 
echo '</br>';

$history = $doProcess->fetchMatchHistoryByPlayerName('avtana');
if($history){
	print_r($history) ;
}
