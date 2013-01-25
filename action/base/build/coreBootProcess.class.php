<?php
/**
 * category action.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
 
require_once dirname(__FILE__).'/../../config/config.php';
require_once dirname(__FILE__).'/../../../core/lib/json.library.php';  
require_once dirname(__FILE__).'/../../../core/lib/curl.library.php';  
require_once dirname(__FILE__).'/../../../core/lib/binary.library.php';
require_once dirname(__FILE__).'/../../../core/repository/matchDetails.class.php';
require_once dirname(__FILE__).'/../../../core/repository/matchHistory.class.php';
require_once dirname(__FILE__).'/../../../core/repository/player.class.php';
require_once dirname(__FILE__).'/../../../core/repository/account.class.php';


abstract class coreBootProcess
{
	
	public static function buildPlayersSummaries($query) 
	{
		$jsonResponse = new curLoad($query);
		
		$players = array() ;
		
		if($jsonResponse->hasResponse() ) 
				{
					// decode json response to json object
					$json_object = JsonHandler::decode($jsonResponse->getResponse()) ;	
					
					$accounts = $json_object->response->players ;
					
					foreach($accounts as $dump_player)
					{
						$account = new account();
						foreach($dump_player as $accountAttribute=>$accountAttributeValue)
						{

							$method = 'set'.ucfirst($accountAttribute) ;
							$account->$method($accountAttributeValue);
							
							if($accountAttribute=='steamid') 
							{
								$players[binaryConvert::make32bit($accountAttributeValue)]->setAccount($account) ;
							}
								
									
						}
											
					}
					
				}
		return $players ;
	}
	
	public static function buildMatchHistoryQuery($player_name=null,$account_id=null,$hero_id=null,$skill=null,$date_min=null,$date_max=null,$league_id=null,$start_at_match_id=null,$matches_requested=null)
	{
		/*
		player_name=<name>		# Search matches with a player name, exact match only 
		hero_id=<id>			# Search for matches with a specific hero being played (hero ID, not name)
		skill=<skill>			# 0 for any, 1 for normal, 2 for high, 3 for very high skill (default is 0)
		date_min=<date>			# date in UTC seconds since Jan 1, 1970 (unix time format) 
		date_max=<date>			# date in UTC seconds since Jan 1, 1970 (unix time format)
		account_id=<id>			# A user's 32-bit steam ID and i test it but it wont's works with 64 only
		league_id=<id>			# matches for a particular league
		start_at_match_id=<id> 		# Start the search at the indicated match id, descending
		matches_requested=<n> 		# Maximum is 25 matches (default is 25)
		*/
		$query = config::$api_url.config::$api_dota_name.'/'.config::$api_match_history.'/'.config::$api_version[0].'/?key='.config::$api_key ;
		
		if($player_name) $query .= '&player_name='.$player_name ;
		if($account_id) $query .= '&account_id='.binaryConvert::make64bit($account_id);
		if($hero_id) $query .= '&hero_id='.$hero_id;
		if($skill) $query .= '&skill='.$skill;
		if($date_min) $query .= '&date_min='.$date_min;
		if($date_max) $query .= '&date_max='.$date_max;
		if($league_id) $query .= '&=league_id'.$league_id;
		if($start_at_match_id) $query .= '&=start_at_match_id'.$start_at_match_id;
		if($matches_requested) $query .= '&=matches_requested'.$matches_requested;


		return $query ;
		
	} // buildMatchHistoryQuery
	
	
	public static function buildMatchHistory($query)
	{
		
		// $query is api format request query
		$jsonResponse = new curLoad($query);
		
		// return false if no match found or there was error on request
		if(!$jsonResponse->getResponse()) return false ;
	
		// decode json response to json object
		$json_object = JsonHandler::decode($jsonResponse->getResponse()) ;	
		
		$history = $json_object->result ;
		
		$matchHistory = new matchHistory() ;
		
		$matches = array() ;
		
					
		foreach($history as $objectname=>$object)
		{
			if($objectname == 'matches') 
			{
				$matcheObjects = $json_object->result->matches;
				foreach($matcheObjects as $matchObject)
				{
					$matches[] = self::buildMatch($matchObject) ;
				}
			}
			else
			{
				$method = 'set'.ucfirst($objectname) ;
				$matchHistory->$method($object) ;
			}
		}
		
		$matchHistory->setMatches($matches) ;
		
		return $matchHistory ;
	}
	
	public static function buildMatch($matchMix)
	{
		$match_result = new matchDetails() ;
		
		foreach($matchMix as $objectname=>$object)
		{
			if($objectname == 'players') {
				
				$players = array();
				$account_ids = array();
				
				$object_players = $matchMix->players ;
				
				
				foreach($object_players as $dump_player)
				{
					$player = new player() ;
					$player_account_id = '' ;
					
					foreach($dump_player as $playerAttribute=>$playerAttributeValue)
					{
						
						$method = 'set'.ucfirst($playerAttribute) ;
						$player->$method($playerAttributeValue);
						if($playerAttribute=='account_id')
						{
							$account_ids[] = $playerAttributeValue ;
							$player_account_id = $playerAttributeValue ;
							
						} 
						
					}
					
					// add player to match players 
					$players[$player_account_id] = $player ;
										
					
				}
				
				// make string with accounts
				$steamids = '';
				foreach($account_ids as $account_id)
						$steamids .= binaryConvert::make64bit($account_id).',';
				
				$steamids = substr($steamids, 0,strlen($steamids)-1 );
				
				
				// request steam account and attach to players
				$query = config::$api_url.config::$api_steamuser_name.'/'.config::$api_player_summaries.'/'.config::$api_version[1].'/?'.'key='.config::$api_key.'&steamids='.$steamids;

				// $query is api format request query
				$jsonResponse = new curLoad($query);

				if($jsonResponse->hasResponse() ) 
				{
					// decode json response to json object
					$json_object = JsonHandler::decode($jsonResponse->getResponse()) ;	
					
					$accounts = $json_object->response->players ;
					//print_r($players); die();
					foreach($accounts as $dump_player)
					{
						$account = new account();
						foreach($dump_player as $accountAttribute=>$accountAttributeValue)
						{
							//print_r($accountAttribute.'=>'.$accountAttributeValue); die();
							$method = 'set'.ucfirst($accountAttribute) ;
							$account->$method($accountAttributeValue);
							
							if($accountAttribute=='steamid') 
							{
								$players[binaryConvert::make32bit($accountAttributeValue)]->setAccount($account) ;
								
							}
								
									
						}
											
					}
					
				}
				
				
				
				
				
				$match_result->setPlayers($players) ;
				
			}
			else {
				$method = 'set'.ucfirst($objectname) ;
				$match_result->$method($object) ;
			}
			
		}

		return $match_result ;
	}
	
}
