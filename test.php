<div align="center">for more methods to work with see <a href="documention/index.html">documention</a></div>
<?php

require_once 'engine.php' ; // as default it must always included

// template helpers are just for giving you good implementation to build fast and better view . 
// they are not core system just for help .
require_once 'helpers/template/item.helper.php' ; 
require_once 'helpers/template/position.helper.php' ; 

// using analyze helper
require_once 'helpers/analyze/analyze.helper.php' ; 


$doProcess = new doProcess();
$match = $doProcess->fetchMatchDetailsById(186887325);

if($match){
	if($match->getRadiant_win() ) 
	{
		echo '<h3>Radiant win</h3>'; 
	}
	else echo '<h3>Dire win</h3>'; 
	
	
	
$players =  $match->getPlayers();
	
$counter = 1 ;
	echo '<h4>Radiant</h4>';
foreach($players as $player)
{
	if($player->getAccount())
	  echo $player->getAccount()->getPersonaname() .' '.'<img src="'.$player->getAccount()->getAvatarmedium().'" />'.'  ' ;

	
	echo  $player->getHero()->getName(),' ',
	$slotPosition->renderFullPosition($player->getPlayer_slot(),$player->getHero()->getThumbnail_image(),'heroImage'),' '
	      ;
	$abilities = $player->getAbilities() ;
	if($abilities)
	{
		echo '<span style="background: #dedede">abilities: ';
		foreach($abilities as $ability)
		{
		echo '<img src="'.$ability->getImage().'" style="margin: 0px;margin-right: 4px" width="30" title="'.$ability->getName().'" />';
		}
	echo  '</span>';
	}
	      
		  	
			echo 'iteams :' ;
				foreach($player->getItems() as $item)
				{
					if($itemHelper->isItem($item))
					echo '<img src="'.$itemHelper->renderItem_image($item).'" width="40" title="'.$itemHelper->renderItem_name($item).'" /> ';
	      
				}
	echo 'Kills: '.$player->getKills(),' ' , 
		 'Deaths: '.$player->getDeaths(),' ' ,
		  'Assists: '.$player->getAssists(),' ' ,
		  'Gold: '.$player->getGold(),' ' ,
			'Last hits: '.$player->getLast_hits(),' ' ,
	'Denies: '.$player->getDenies(),' ' ,
	'Level: '.$player->getLevel(),' ' ;

	echo '<br />';
		  
	if($counter == 5) echo '<hr /> <h4>Dire</h4> ' ;	  
	$counter = $counter + 1;
		  
}

echo '<br />' ;
echo 'Best Warrior : ';
$bestPlayer = $analyzer->analyzeBestWarrior($players) ;
echo $slotPosition->renderFullPosition($bestPlayer->getPlayer_slot(),$bestPlayer->getHero()->getThumbnail_image(),'heroImage') ;

echo '<br />';
echo 'Top Ten Warriors : ' ;

$top10players = $analyzer->analyzeTopTenWarriors($players) ;

foreach ($top10players as $player) {
	echo $slotPosition->renderFullPosition($player->getPlayer_slot(),$player->getHero()->getThumbnail_image(),'heroImage') ;
}
}
else echo 'not found' ; 
echo '</br>';
?>
<div align="center">for more methods to work with see <a href="documention/index.html">documention</a></div>
