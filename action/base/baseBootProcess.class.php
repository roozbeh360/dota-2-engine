<?php
/**
 * category action.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
 
require_once 'build/coreBootProcess.class.php' ;

abstract class BaseDoProcess extends coreBootProcess
{
	public function fetchMatchDetailsById($match_id)
	{
		
		if(!$match_id) return false ;
		
		// request match details using api
		$query = config::$api_url.config::$api_dota_name.'/'.config::$api_match_details.'/'.config::$api_version[0].'/?'.'key='.config::$api_key.'&match_id='.(int)$match_id;
		
		// $query is api format request query
		$jsonResponse = new curLoad($query);
		
		// return false if no match found or there was error on request
		if(!$jsonResponse->getResponse()) return false ;
	
		// decode json response to json object
		$json_object = JsonHandler::decode($jsonResponse->getResponse()) ;	
		
		// build matchDetails object on json object
		$match_result = new matchDetails() ;
		
		$match_result = self::buildMatch($json_object->result) ;
		
		return $match_result ;
	} // fetchMatchById
	
	public function fetchPlayersSummariesById($steamids)
	{
		$query = config::$api_url.config::$api_steamuser_name.'/'.config::$api_player_summaries.'/'.config::$api_version[1].'/?'.'key='.config::$api_key.'&steamids='.$steamids;
		return self::buildPlayerSummaries($query) ;
	}
	
	public function fetchMatchHistory($request)
	{
		$query = self::buildMatchHistoryQuery($request);
		return self::buildMatchHistory($query) ;
	}
	



	
}
