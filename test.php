<?php

require_once 'engine.php' ;



$doProcess = new doProcess();
$match = $doProcess->fetchMatchDetailsById(108667160);

if($match){
	if($match->getRadiant_win() ) 
	{
		echo '<h3>Radiant win</h3>'; 
	}
	else echo '<h3>dire win</h3>'; 
	
	
	
$players =  $match->getPlayers();
	
$counter = 1 ;
	
foreach($players as $player)
{
	
	
	echo  $player->getPlayer_slot(),' ',
	      $player->getHero()->getName(),' ',
	      '<img src="'.$player->getHero()->getThumbnail_image().'" />',' ',
	       'iteams :'.$player->getItem_0(),' '.$player->getItem_1().' '.$player->getItem_2().' '.$player->getItem_3().' '.$player->getItem_4().' '.$player->getItem_5().' ',
	      '<br />';
		  
	if($counter == 5) echo '<hr />' ;	  
	$counter = $counter + 1;
		  
}

echo '<br />' ;
}
else echo 'not found' ; 
echo '</br>';

