<?php


require_once 'base/baseAbilities.class.php' ;
require_once  'ability.class.php' ;


class abilities extends baseAbilities {
	
	function __construct()
	{
		$fountain_abilities = file_get_contents(dirname(__FILE__).'/../../fountain/json/abilities.json') ;
		
		$abilities = JsonHandler::decode($fountain_abilities) ;
		
	
		$heros_result_abilities = $abilities->result->abilities ;
		$array = array();
		
		foreach($heros_result_abilities as $key=>$ability)
		{
			$array[$ability->id] = $ability->name ;
			
		}	

		$this->setAbilites_pool($array) ;
		
		
	}
	
	public function getAbility($ability_id,$time,$level)
	{

		$abilites_pool = $this->getAbilites_pool();
		
		$ability = new ability($ability_id,$time,$level) ;
		
		$ability->setAbility($ability_id) ;
		$ability->setTime($time) ;
		$ability->setLevel($level) ;


		if(array_key_exists($ability_id, $abilites_pool)) 
		 		$ability->setName($abilites_pool[$ability_id]);
		
		
		return $ability ;
	}
}