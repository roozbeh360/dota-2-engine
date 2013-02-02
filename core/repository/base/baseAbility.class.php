<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
   
abstract class baseAbility {
	
	public $ability ;
	public $time ;
	public $level ;
	public $name ;
	
	
	public function setAbility($ability)
	{
		$this->ability = $ability ;
	}
	
	public function getAbility()
	{
		return $this->ability ;
	}
	
	public function setTime($time)
	{
		$this->time = $time ;
	}
	
	public function getTime()
	{
		return $this->time ;
	}
	
	public function setLevel($level)
	{
		$this->level = $level ; 
	}
	
	public function getLevel()
	{
		return $this->level ;
	}
	
	public function setName($name)
	{
		$this->name = $name ; 
	}
	
	public function getName()
	{
		$real_name = str_replace('_', ' ', $this->name) ;
		return $real_name ;
	}
	
	public function getImage()
	{
		if($this->name == 'stats') return "fountain/images/ability/".$this->name.".png" ;
		return "http://media.steampowered.com/apps/dota2/images/abilities/".$this->name."_hp1.png" ;
	}
}
