<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
     
abstract class basePlayer{
	
	public $account_id ;
	public $player_slot ;
	public $hero_id ;
	public $item_0 ;
	public $item_1 ;
	public $item_2 ;
	public $item_3 ;
	public $item_4 ;
	public $item_5 ;
	public $kills ;
	public $deaths ;
	public $assists ;
	public $leaver_status;
	public $gold ;
	public $last_hits ;
	public $denies ;
	public $gold_per_min ;
	public $xp_per_min ;
	public $gold_spent ;
	public $hero_damage ;
	public $tower_damage ;
	public $hero_healing ;
	public $level ;
	public $account ;
	
	public function setAccount_id($account_id)
	{
		$this->account_id = $account_id ;
	}
	
	public function getAccount_id()
	{
		return $this->account_id ; 
	}
	
	public function setPlayer_slot($player_slot)
	{
		$this->player_slot = $player_slot ; 
	}
	
	public function getPlayer_slot()
	{
		return $this->player_slot ; 
	}
	
	public function setHero_id($hero_id)
	{
		$this->hero_id = $hero_id ; 
	}
	
	public function getHero_id()
	{
		return $this->hero_id ; 
	}
	
	public function setItem_0($item_0)
	{
		$this->item_0 = $item_0 ; 
	}
	
	public function getItem_0()
	{
		return $this->item_0 ; 
	}
	
	public function setItem_1($item_1)
	{
		$this->item_1 = $item_1 ; 
	}
	
	public function getItem_1()
	{
		return $this->item_1 ; 
	}
	
	public function setItem_2($item_2)
	{
		$this->item_2 = $item_2 ; 
	}
	
	public function getItem_2()
	{
		return $this->item_2 ; 
	}
	
	public function setItem_3($item_3)
	{
		$this->item_3 = $item_3 ; 
	}
	
	public function getItem_3()
	{
		return $this->item_3 ; 
	}
	
	public function setItem_4($item_4)
	{
		$this->item_4 = $item_4 ; 
	}
	
	public function getItem_4()
	{
		return $this->item_4 ; 
	}
	
	public function setItem_5($item_5)
	{
		$this->item_5 = $item_5 ; 
	}
	
	public function getItem_5()
	{
		return $this->item_5 ; 
	}
	
	public function setKills($kills)
	{
		$this->kills = $kills ; 
	}
	
	public function getKills()
	{
		return $this->kills ; 
	}
	
	public function setDeaths($deaths)
	{
		$this->deaths = $deaths ; 
	}
	
	public function getDeaths()
	{
		return $this->deaths ; 
	}
	
	public function setAssists($assists)
	{
		$this->assists = $assists ; 
	}
	
	public function getAssists()
	{
		return $this->assists ; 
	}
	
	public function setLeaver_status($leaver_status)
	{
		$this->leaver_status = $leaver_status ; 
	}
	
	public function getLeaver_status()
	{
		return $this->leaver_status ; 
	}
	
	public function setGold($gold)
	{
		$this->gold = $gold ; 
	}
	
	public function getGold()
	{
		return $this->gold ; 
	}
	
	public function setLast_hits($last_hits)
	{
		$this->last_hits = $last_hits ; 
	}
	
	public function getLast_hits()
	{
		return $this->last_hits ; 
	}
	
	public function setDenies($denies)
	{
		$this->denies = $denies ; 
	}
	
	public function getDenies()
	{
		return $this->denies ; 
	}
	
	public function setGold_per_min($gold_per_min)
	{
		$this->gold_per_min = $gold_per_min ; 
	}
	
	public function getGold_per_min()
	{
		return $this->gold_per_min ; 
	}
	
	public function setXp_per_min($xp_per_min)
	{
		$this->xp_per_min = $xp_per_min ; 
	}
	
	public function getXp_per_min()
	{
		return $this->xp_per_min ; 
	}
	
	public function setGold_spent($gold_spent)
	{
		$this->gold_spent = $gold_spent ; 
	}
	
	public function getGold_spent()
	{
		return $this->gold_spent ; 
	}
	
	public function setHero_damage($hero_damage)
	{
		$this->hero_damage = $hero_damage ; 
	}
	
	public function getHero_damage()
	{
		return $this->hero_damage ; 
	}
	
	public function setTower_damage($tower_damage)
	{
		$this->tower_damage = $tower_damage ; 
	}
	
	public function getTower_damage()
	{
		return $this->tower_damage ; 
	}
	
	public function setHero_healing($hero_healing)
	{
		$this->hero_healing = $hero_healing ; 
	}
	
	public function getHero_healing()
	{
		return $this->hero_healing ; 
	}
	
	public function setLevel($level){
		$this->level = $level ; 
	}
	public function getLevel()
	{
		return $this->level ; 
	}
	
	public function setAccount($account)
	{
		$this->account = $account ;
	}
	
	public function getAccount()
	{
		return $this->account ;
	}
}
        