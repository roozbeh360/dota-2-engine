<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */  

  
abstract class baseHerosPool
{
	public $heros_pool ;
	
	public function setHeros_pool($array)
	{
		$this->heros_pool = $array ;
	}
	public function getHeros_pool()
	{
		return $this->heros_pool ;
	}
}   