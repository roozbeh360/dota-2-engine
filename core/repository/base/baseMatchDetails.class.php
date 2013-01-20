<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */  
  
abstract class baseMatchDetails{
	
	public $players = array() ;
	public $season ;
	public $radiant_win ;
	public $duration ;
	public $starttime ;
	public $match_id ;
	public $tower_status_radiant ;
	public $tower_status_dire ;
	public $barracks_status_radiant ;
	public $barracks_status_dire ;
	public $cluster ;
	public $first_blood_time ;
	public $replay_salt ;
	public $lobby_type ;
	public $human_players ;
	public $leagueid ;
	public $positive_votes ;
	public $negative_votes ;
	public $game_mode ;
	public $start_time ;
	
	public function setPlayers($array)
	{
		foreach($array as $object)
		{
			$player = $object;
			$this->players[] = $player ;
		}
	}
	
	public function getPlayers()
	{
		return $this->players ;	
	}
	
	public function setSeason($season)
	{
		$this->season = $season ;
	}
	
	public function getSeason()
	{
		return $this->season ;
	}
	
	public function setRadiant_win($radiant_win)
	{
		$this->radiant_win = $radiant_win ;
	}
	
	public function getRadiant_win()
	{
		return $this->radiant_win ;
	}
	
	public function setDuration($duration)
	{
		$this->duration = $duration ;
	}
	
	public function getDuration()
	{
		return $this->duration = $duration ;
	}
	
	public function setStarttime($starttime)
	{
		$this->starttime = $starttime ;
	}
	
	public function getStarttime()
	{
		return $this->starttime ;
	}
	
	public function setMatch_id($match_id)
	{
		$this->match_id = $match_id ;
	}
	public function getMatch_id()
	{
		return $this->match_id ;
	}
	
	public function setTower_status_radiant($tower_status_radiant)
	{
		$this->tower_status_radiant =$tower_status_radiant ;
	}
	
	public function getTower_status_radiant()
	{
		return $this->tower_status_radiant ;
	}
	
	public function setTower_status_dire($tower_status_dire)
	{
		$this->tower_status_dire = $tower_status_dire ;
	}
	
	public function getTower_status_dire()
	{
		return $this->tower_status_dire ;
	}
	
	public function setBarracks_status_radiant($barracks_status_radiant)
	{
		$this->barracks_status_radiant = $barracks_status_radiant ;
	}
	
	public function getBarracks_status_radiant()
	{
		return $this->barracks_status_radiant ;
	}
	
	public function setBarracks_status_dire($barracks_status_dire)
	{
		$this->barracks_status_dire = $barracks_status_dire ;
	}
	
	public function getBarracks_status_dire()
	{
		return $this->barracks_status_dire ;
	}
	
	public function setCluster($cluster)
	{
		$this->cluster = $cluster ;
	}
	
	public function getCluster()
	{
		return $this->cluster ;
	}
	
	public function setFirst_blood_time($first_blood_time)
	{
		$this->first_blood_time ;
	}
	
	public function getFirst_blood_time()
	{
		return $this->first_blood_time ;
	}
	
	public function setReplay_salt($replay_salt)
	{
		$this->replay_salt = $replay_salt ;
	}
	public function getReplay_salt()
	{
		return $this->replay_salt ;
	}
	
	public function setLobby_type($lobby_type)
	{
		$this->lobby_type = $lobby_type ;
	}
	
	public function getLobby_type()
	{
		return $this->lobby_type ;
	}
	
	public function setHuman_players($human_players)
	{
		$this->human_players = $human_players ;
	}
	
	public function getHuman_players()
	{
		return $this->human_players ;
	}
	
	public function setLeagueid($leagueid)
	{
		$this->$leagueid = $leagueid ;
	}
	
	public function getLeagueid()
	{
		return $this->leagueid ;
	}
	
	public function setPositive_votes($positive_votes)
	{
		$this->positive_votes = $positive_votes ;
	}
	
	public function getPositive_votes()
	{
		return $this->positive_votes ;
	}
	
	public function setNegative_votes($negative_votes)
	{
		$this->negative_votes = $negative_votes ;
	}
	
	public function getNegative_votes()
	{
		return $this->negative_votes ;
	}
	
	public function setGame_mode($game_mode)
	{
		$this->game_mode = $game_mode ;
	}
	public function getGame_mode()
	{
		return $this->game_mode ;
	}
	
		public function setStart_time($start_time)
	{
		$this->start_time = $start_time ;
	}
	
	public function getStart_time()
	{
		return $this->start_time ;
	}
}
