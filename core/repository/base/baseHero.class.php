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
		$this->$name = $name ;
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
		return $this->name ;
	}
	
	
}
