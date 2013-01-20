<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */

abstract class baseMatchHistory
{

	public $status ;
	public $num_results ;
	public $total_results ;
	public $results_remaining ;
	public $matches ;
	 
		
	public function setStatus($status)
	{
		$this->status = $status ;
	}
	
	public function getStatus()
	{
		return $this->status ;
	}
	
	public function setNum_results($num_results)
	{
		$this->num_results = $num_results;
	}
	
	public function getNum_results()
	{
		return $this->num_results ;
	}
	
	public function setTotal_results($total_results)
	{
		$this->total_results = $total_results ;
	}
	
	public function getTotal_results()
	{
		return $this->total_results ;
	}
	
	public function setResults_remaining($results_remaining)
	{
		$this->results_remaining = $results_remaining ;
	}
	
	public function getResults_remaining()
	{
		return $this->results_remaining ;
	}
	
	public function setMatches($matches)
	{
		$this->matches = $matches ;
	}
	
	public function getMatches()
	{
		return $this->matches ;
	}	
	

}
