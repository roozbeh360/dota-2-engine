<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
     
abstract class baseTeam{

	public $name ;
	public $team_id ;
	public $tag ;
	public $time_created ;
	public $rating;
	public $country_code;
	public $logo;
	public $logo_sponsor;
	public $games_played_with_current_roster;
	public $player_N_account_id;
	public $admin_account_id;
	public $player_0_account_id;
	public $player_1_account_id;
	public $player_2_account_id;
	public $player_3_account_id;
	public $player_4_account_id;
	public $last_league_id;
	public $url;

	public function setUrl($url)
	{
		$this->url = $url ;
	}

	public function getUrl()
	{
		return $this->url ; 
	}
	
	public function setPlayer_0_account_id($player_0_account_id)
	{
		$this->player_0_account_id = $player_0_account_id ;
	}

	public function getPlayer_0_account_id()
	{
		return $this->player_0_account_id ; 
	}
	
	public function setPlayer_1_account_id($player_1_account_id)
	{
		$this->player_1_account_id = $player_1_account_id ;
	}

	public function getPlayer_1_account_id()
	{
		return $this->player_1_account_id ; 
	}
	
	public function setPlayer_2_account_id($player_2_account_id)
	{
		$this->player__account_id = $player_2_account_id ;
	}

	public function getPlayer_2_account_id()
	{
		return $this->player_2_account_id ; 
	}
	
	public function setPlayer_3_account_id($player_3_account_id)
	{
		$this->player_3_account_id = $player_3_account_id ;
	}

	public function getPlayer_3_account_id()
	{
		return $this->player_3_account_id ; 
	}
	
	public function setPlayer_4_account_id($player_4_account_id)
	{
		$this->player_4_account_id = $player_4_account_id ;
	}

	public function getPlayer_4_account_id()
	{
		return $this->player_4_account_id ; 
	}
	
	public function setLast_league_id($last_league_id)
	{
		$this->last_league_id = $last_league_id ;
	}

	public function getLast_league_id()
	{
		return $this->last_league_id ; 
	}
	
	

	public function setName($name)
	{
		$this->name = $name ;
	}

	public function getName()
	{
		return $this->name ; 
	}

	public function setTeam_id($team_id)
	{
		$this->team_id = $team_id ; 
	}

	public function getTeam_id()
	{
		return $this->team_id ; 
	}

	public function setTag($tag)
	{
		$this->tag = $tag ; 
	}

	public function getTag()
	{
		return $this->tag ; 
	}

	public function setTime_created($time_created)
	{
		$this->time_created = $time_created ; 
	}

	public function getTime_created()
	{
		return $this->time_created ; 
	}

	
	public function setRating($rating)
	{
		$this->rating = $rating ;
	}

	public function getRating()
	{
		return $this->rating ; 
	}
	
	public function setCountry_code($country_code)
	{
		$this->country_code = $country_code ;
	}

	public function getCountry_code()
	{
		return $this->country_code ; 
	}
	
	public function setLogo($logo)
	{
		$this->logo = $logo ;
	}

	public function getLogo()
	{
		return $this->logo ; 
	}
	
	public function setLogo_sponsor($logo_sponsor)
	{
		$this->logo_sponsor = $logo_sponsor ;
	}

	public function getLogo_sponsor()
	{
		return $this->logo_sponsor ; 
	}
	
	public function setGames_played_with_current_roster($games_played_with_current_roster)
	{
		$this->games_played_with_current_roster = $games_played_with_current_roster ;
	}

	public function getGames_played_with_current_roster()
	{
		return $this->games_played_with_current_roster ; 
	}
	
	public function setPlayer_N_account_id($player_N_account_id)
	{
		$this->player_N_account_id = $player_N_account_id ;
	}

	public function getPlayer_N_account_id()
	{
		return $this->player_N_account_id ; 
	}
	
	public function setAdmin_account_id($admin_account_id)
	{
		$this->admin_account_id = $admin_account_id ;
	}

	public function getAdmin_account_id()
	{
		return $this->admin_account_id ; 
	}

	
}
	
