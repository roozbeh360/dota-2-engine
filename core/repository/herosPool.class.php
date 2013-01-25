<?php

require_once  'base/baseHerosPool.class.php'  ;   
require_once  'hero.class.php' ;
require_once  'implements/heros.interface.php'  ;
   
 class herosPool extends baseHerosPool 
{
	function __construct()
	{
		$fountain_heros = file_get_contents(dirname(__FILE__).'/../../fountain/json/heros.json') ;
		
		$heros = JsonHandler::decode($fountain_heros) ;
		
	
		$heros_result_heros = $heros->result->heroes ;
		$array = array();
		
		foreach($heros_result_heros as $key=>$hero)
		{
			$array[$hero->id] = $hero->name ;
			
		}	

		$this->setHeros_pool($array) ;
		
		
	}
	
	public function getHero($id)
	{
		
		$heros_pool = $this->getHeros_pool();
		
		if(!array_key_exists($id, $heros_pool)) return false ;
		
		$hero = new hero() ;
		$hero->setId($id);
		$hero->setName($heros_pool[$id]);
		
		return $hero ;
	}
	
}   