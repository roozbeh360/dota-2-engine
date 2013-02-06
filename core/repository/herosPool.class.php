<?php

require_once  'base/baseHerosPool.class.php'  ;   
require_once  'hero.class.php' ;

   
 class herosPool extends baseHerosPool 
{
	function __construct()
	{
		$fountain_heros_pool = '' ;
		if(extension_loaded('memcached'))
    	{

    		$mc = new Memcached();
			$mc->addServer( "localhost", 11211 );
			
			$heros_pool = $mc->get( "heros_pool" ) ;
			if( $heros_pool === false )
			{
				$fountain_heros_pool = file_get_contents(dirname(__FILE__).'/../../fountain/json/heros.json') ;
				$mc->set( "heros_pool", $fountain_heros_pool, 60 * 60 * 24 * 2 /* 2 days */ );
			}
			else 
			{
				$fountain_heros_pool = $heros_pool ;
			}	
    	}
		else
		{
			$fountain_heros_pool = file_get_contents(dirname(__FILE__).'/../../fountain/json/heros.json') ;
		}
		

		
		$heros = JsonHandler::decode($fountain_heros_pool) ;
		
	
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