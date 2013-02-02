<?php
 
 
require_once('base/basePlayer.class.php')  ;
require_once('herosPool.class.php')  ;
require_once('abilities.class.php')  ;

class player extends basePlayer
{
	
	
	public function getHero()
	{
		$heros_pool = new herosPool() ;
		$hero =  $heros_pool->getHero($this->getHero_id()) ;
		return $hero;
	}
	
	public function getAbilities()
	{
		$abilities = new abilities() ;
		$ability_upgrades = $this->getAbility_upgrades() ;
		
		if(!$ability_upgrades) return false ;
		
		$array = array() ;
		foreach($ability_upgrades as $abilityobject)
		{
			$ability =  $abilities->getAbility($abilityobject->ability,$abilityobject->time,$abilityobject->level);
			$array[] = $ability ;
		}
		return $array ;
	}
	
}
