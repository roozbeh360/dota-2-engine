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
}
        