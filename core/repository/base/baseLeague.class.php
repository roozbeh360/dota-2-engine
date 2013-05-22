<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     baobao
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
     
abstract class baseLeague{

	public $name ;
	public $leagueid ;
	public $description ;
	public $tournament_url ;
	public $game_id;
	public $teams = array();
	public $starttime;
	public $comment;
	public $final;
	public $status;
	public $statusDetail;


	public function setName($name)
	{
		$this->name = $name ;
	}

	public function getName()
	{
		return $this->name ; 
	}

	public function setLeagueid($leagueid)
	{
		$this->leagueid = $leagueid ; 
	}

	public function getLeagueid()
	{
		return $this->leagueid ; 
	}

	public function setDescription($description)
	{
		$this->description = $description ; 
	}

	public function getDescription()
	{
		return $this->description ; 
	}

	public function setTournament_url($tournament_url)
	{
		$this->tournament_url = $tournament_url ; 
	}

	public function getTournament_url()
	{
		return $this->tournament_url ; 
	}
	
	public function setLeague_id($league_id)
	{
		$this->leagueid = $league_id ;
	}

	
	public function setGame_id($game_id)
	{
		$this->game_id = $game_id ;
	}

	public function getGame_id()
	{
		return $this->game_id ; 
	}
	
	public function setTeams($array)
	{
		foreach($array as $object)
		{
			$team = $object;
			$this->teams[] = $team ;
		}
	}

	public function getTeams()
	{
		return $this->teams ; 
	}
	
	public function setStarttime($starttime)
	{
		$this->starttime = $starttime ;
	}

	public function getStarttime()
	{
		return $this->starttime ; 
	}
	
	public function setComment($comment)
	{
		$this->comment = $comment ;
	}

	public function getComment()
	{
		return $this->comment ; 
	}
	
	public function setFinal($final)
	{
		$this->final = $final ;
	}

	public function getFinal()
	{
		return $this->final ; 
	}
	
	public function setStatus($status)
	{
		$this->status = $status ;
	}

	public function getStatus()
	{
		return $this->status ; 
	}
	
	public function setStatusDetail($statusDetail)
	{
		$this->statusDetail = $statusDetail ;
	}

	public function getStatusDetail()
	{
		return $this->statusDetail ; 
	}
	
}