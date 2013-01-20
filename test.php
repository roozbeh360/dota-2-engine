<?php

require_once 'engine.php' ;




// come from action/config/config.php
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
else echo 'not ss found' ; 
echo '</br>';

$matchHistory = $doProcess->fetchMatchHistory('Koomorang');
if($matchHistory)
$array = $matchHistory->getMatches();
foreach($array as $match){
	$playerss =  $match->getPlayers();
	echo $playerss[9]->getAccount_id() ;
}
	
//print_r($matchHistory);
//else echo 'error of get matches' ;