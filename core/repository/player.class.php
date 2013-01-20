<?php
 
 
require_once('base/basePlayer.class.php')  ;
require_once('herosPool.class.php')  ;

class player extends basePlayer
{
	
	
	public function getHero()
	{
		$heros_pool = new herosPool() ;
		$hero =  $heros_pool->getHero($this->getHero_id()) ;
		return $hero;
	}
	
	
}
