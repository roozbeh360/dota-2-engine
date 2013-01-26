<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
   
abstract class baseHero {
	
	public $id ;	
	public $name ;
	
	function __constract($id = null,$name = null)
	{
		$this->id = $id ;
		$this->name = $name ;
	}
	
	public function setId($id)
	{
		$this->id = $id ;
	}
	
	public function getId()
	{
		return $this->id ;
	}
	
	public function setName($name)
	{
		$this->name = $name ;
	}
	
	public function getName()
	{
		$real_name = str_replace('npc_dota_hero_', '', $this->name) ;
		$real_name = str_replace('_', ' ', $real_name) ;
		return $real_name ;
	}
	
	public function getFull_image()
	{
		$real_name = str_replace('npc_dota_hero_', '', $this->name) ;
		return "http://media.steampowered.com/apps/dota2/images/heroes/".$real_name."_full.png" ;
	}
	
	public function getThumbnail_image()
	{
		$real_name = str_replace('npc_dota_hero_', '', $this->name) ;
		return "http://media.steampowered.com/apps/dota2/images/heroes/".$real_name."_sb.png" ;
	}
	
}
