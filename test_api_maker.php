
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
	
echo  '<h3> make api respone over framework </h3><br />' ;
	
echo  '<h4> full match data (any thing you need of ) </h4><br />' ;		
// full match data (any thing you need of )
$api_maker_data = JsonHandler::encodeToApi($match);
print_r($api_maker_data) ;	
echo '<br />' ;	
	

echo  '<h4> full player data dumping (any thing you need of ) </h4><br />' ;	
// full player data dumping (any thing you need of )	
$players =  $match->getPlayers();
$api_maker_data = JsonHandler::encodeToApi($players);
print_r($api_maker_data) ;	
echo '<br />' ;		

echo  '<h3> customize api respone over framework </h3><br />' ;
	
	
echo  '<h4> helper data analyze </h4><br />' ;	

echo  '<h6> best Player </h6><br />' ;	
$bestPlayer = $analyzer->analyzeBestWarrior($players) ;
// helper data analyze
$api_maker_data = JsonHandler::encodeToApi($bestPlayer);
print_r($api_maker_data) ;	
echo '<br />' ;	

echo  '<h6> top 10 players </h6><br />' ;	
$top10players = $analyzer->analyzeTopTenWarriors($players) ;
// full match data (any thing you need of )
$api_maker_data = JsonHandler::encodeToApi($top10players);
print_r($api_maker_data) ;	
echo '<br />' ;	





}
else echo 'not found' ; 



?>
