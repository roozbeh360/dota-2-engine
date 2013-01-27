<?php

class analyzer 
{
	public function analyzeBestWarrior($players)
	{
		$players_scors = array() ;
		
		foreach($players as $player)
		{
			$score = (((int)$player->getKills()/(int)$player->getDeaths())+((int)$player->getAssists()/(4+(int)$player->getDeaths())))*(((int)$player->getLevel()/100)+1) ;
			$players_scors[$player->getPlayer_slot()] = $score ;
		}
		
		$bestPlayerSlot = '' ;
		$bestPlayerScore = 0.0 ;
		
		foreach($players_scors as $slot=>$score)
		{
			if($score > $bestPlayerScore)
			{
				$bestPlayerSlot = $slot ;
				$bestPlayerScore = $score;
			}
		
		}
		
		foreach ($players as $player) 
		{
			if($player->getPlayer_slot() == $bestPlayerSlot)
			{
				return $player ;
			}
		}
	}
	
	public function analyzeTopTenWarriors($players)
	{
		$players_scors = array() ;
		
		foreach($players as $player)
		{
			$score = (((int)$player->getKills()/(int)$player->getDeaths())+((int)$player->getAssists()/(4+(int)$player->getDeaths())))*(((int)$player->getLevel()/100)+1) ;
			$players_scors[$player->getPlayer_slot()] = $score ;
		}
		
		
		arsort($players_scors) ;

		$players_top10 = array() ;
		
		foreach($players_scors as $slot=>$score )
		{
			foreach ($players as $player) 
				{
			
					if($player->getPlayer_slot() == $slot)
					{
						$players_top10[] = $player ;
					}
				}		
		}
		
		
		return $players_top10 ;
	}
	
	
	
}

	
$analyzer = new analyzer() ;	
	
	