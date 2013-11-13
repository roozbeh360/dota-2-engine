<?php

require_once '../engine.php' ; // as default it must always included

// template helpers are just for giving you good implementation to build fast and better view . 
// they are not core system just for help .
require_once '../helpers/template/item.helper.php' ; 
require_once '../helpers/template/position.helper.php' ; 

// using analyze helper
require_once '../helpers/analyze/analyze.helper.php' ; 

if(!isset($_POST['matchid']) && !isset($_GET['matchid'])) {echo 'not found';die();}  

if(isset($_POST['matchid'])) $matchid = $_POST['matchid'] ;
if(isset($_GET['matchid'])) $matchid = $_GET['matchid'] ;

$doProcess = new doProcess();
$match = $doProcess->fetchMatchDetailsById($matchid);

if($match){
	if($match->getRadiant_win() ) 
	{
		echo '<h3 align="center" style="color: #92a51b">Radiant win</h3>'; 
	}
	else echo '<h3 align="center" style="color: #c22f19">Dire win</h3>'; 
	
	echo '<h4 style="color: white;" text-align="center">';
	if($match->getStart_time())
		echo gmdate("Y-m-d  H:i:s ", $match->getStart_time());
	else echo gmdate("Y-m-d TH:i:s ", $match->getStarttime());

	echo ' Mode: '.$match->getGame_mode_name().' Duration: '.round(((int)$match->getDuration()/60)).' min ' ;
	if($match->getLobby_type()) echo ' '." lobby: $match->getLobby_type_name()".'</h4>';
	if($match->getReplay_salt())
	echo '<span style="float: right; font-size: 1.2em;"><a href="'.$match->getMatch_replay().'">Download Replay</a></span>'  ;

$players =  $match->getPlayers();
	
$counter = 1 ;
?>
<table cellspacing="0" style="min-width: 800px;">
	<tr style="color: white;font-weight: bold;">
	<td>Player Name</td>	
	<td>Hero</td>
	<td>Level</td>
	<td>K</td>
	<td>D</td>
	<td>A</td>
	<td>Gold</td>
	<td>LH</td>
	<td>Denies</td>
	<td>GS</td>
	<td>GPM</td>
	<td>Items</td>
	</tr>
												
<?	
	echo '<h4 style="color: #92a51b">';
	echo 'Radiant</h4>';
	
foreach($players as $player)
{
	if($counter%2==0)
			echo '<tr style="background: #464646;">' ;
	else echo '<tr style="background: #393939;">' ;
	
	echo '<td>' ;
	if($player->getAccount())
	  echo $player->getAccount()->getPersonaname() .' '.'<img src="'.$player->getAccount()->getAvatarmedium().'" style="float: left;" width="40" />'.'  ' ;
	else echo 'privacy protected' ;
	echo '</td>';
	
	echo '<td style="max-width:274px">' ;
	if($player->getHero() ) {echo  $player->getHero()->getName().' ' ;
	echo $slotPosition->renderFullPosition($player->getPlayer_slot(),$player->getHero()->getThumbnail_image(),'heroImage'),' ';}
	
	$abilities = $player->getAbilities() ;
	if($abilities)
	{
		echo '<p>';
		echo '<hr />';
		foreach($abilities as $ability)
		{
		echo '<img src="'.$ability->getImage().'" style="margin: 0px;margin-right: 4px" width="15" title="min: '.round((int)$ability->getTime()/60).' level: '.$ability->getLevel().' '.$ability->getName().'" />';
		}
	echo  '</p>';
	}
	
	echo '</td>';      
		  
	echo '<td>' ;
	echo $player->getLevel() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getKills() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getDeaths() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getAssists() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getGold() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getLast_hits() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getDenies() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getGold_spent() ;
	echo '</td>' ;
	
	echo '<td>' ;
	echo $player->getGold_per_min() ;
	echo '</td>' ;

	
	echo '<td>' ;	  
		foreach($player->getItems() as $item)
		{
			if($itemHelper->isItem($item))
			echo '<img src="'.$itemHelper->renderItem_image($item).'" width="40" title="'.$itemHelper->renderItem_name($item).'" />';
	      
		}
	echo '</td>';
	
	echo '</tr>' ;	 
	
	
	
	
	if($counter == 5) echo '
	<tr>
	<td><h4 style="color: #c22f19;">Dire</h4></td>
	</tr>
	<tr style="color: white;font-weight: bold;">
	<td>Player Name</td>	
	<td>Hero</td>
	<td>Level</td>
	<td>K</td>
	<td>D</td>
	<td>A</td>
	<td>Gold</td>
	<td>LH</td>
	<td>Denies</td>
	<td>GS</td>
	<td>GPM</td>
	<td>Items</td>
	</tr>  ' ;	  
	$counter = $counter + 1;
}

?>
</table>
<?php
echo '<br />' ;
echo 'Best Warrior : ';
$bestPlayer = $analyzer->analyzeBestWarrior($players) ;
echo $slotPosition->renderFullPosition($bestPlayer->getPlayer_slot(),$bestPlayer->getHero()->getThumbnail_image()) ;

echo '<br />';
echo 'Top Ten Warriors : ' ;

$top10players = $analyzer->analyzeTopTenWarriors($players) ;

foreach ($top10players as $player) {
	echo $slotPosition->renderFullPosition($player->getPlayer_slot(),$player->getHero()->getThumbnail_image()) ;
}
}
else echo 'not found' ; 
echo '</br>';
?>

