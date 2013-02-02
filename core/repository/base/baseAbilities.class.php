<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */  

  
abstract class baseAbilities
{
	public $abilites_pool ;
	
	public function setAbilites_pool($array)
	{
		$this->abilites_pool = $array ;
	}
	public function getAbilites_pool()
	{
		return $this->abilites_pool ;
	}
}   