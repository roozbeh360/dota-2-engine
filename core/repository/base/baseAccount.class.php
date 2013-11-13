<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
 
abstract class baseAccount
{
	public $steamid ;
	public $communityvisibilitystate;
	public $personaname ;
	public $avatar ;
	public $avatarmedium ;
	public $avatarfull ;
	public $personastate ;
	public $profilestate ;
	public $lastlogoff ;
	public $profileurl ;
	public $commentpermission ;
	public $realname ;
	public $primaryclanid ;
	public $timecreated ;
	public $loccountrycode ;
	public $gameserverip ;
	public $locstatecode ;
	public $gameextrainfo ;
	public $loccityid ;
	public $gameid ;
	public $gameserversteamid ;
	public $personastateflags;
		
	public function setSteamid($steamid)
	{
		$this->steamid = $steamid ; 
	}
	
	public function getSteamid()
	{
		return $this->steamid ; 
	}
	
	public function setCommunityvisibilitystate($communityvisibilitystate)
	{
		$this->communityvisibilitystate = $communityvisibilitystate ; 
	}
	
	public function getCommunityvisibilitystate()
	{
		return $this->communityvisibilitystate ; 
	}
	
	public function setPersonaname($personaname)
	{
		$this->personaname  = $personaname ; 
	}
	
	public function getPersonaname()
	{
		return $this->personaname ; 
	}
	
	public function setAvatar($avatar)
	{
		$this->avatar = $avatar ; 
	}
	
	public function getAvatar()
	{
		return $this->avatar ; 
	}
	
	public function setAvatarmedium($avatarmedium)
	{
		$this->avatarmedium =$avatarmedium ; 
	}
	
	public function getAvatarmedium()
	{
		return $this->avatarmedium ; 
	}
	
	public function setAvatarfull($avatarfull)
	{
		$this->avatarfull = $avatarfull ; 
	}
	public function getAvatarfull()
	{
		return $this->avatarfull ; 
	}
	
	public function setPersonastate($personastate)
	{
		$this->personastate = $personastate ; 
	}
	public function getPersonastate()
	{
		return $this->personastate ; 
	}
	
	public function setProfilestate($profilestate)
	{
		$this->profilestate = $profilestate ;
	}
	
	public function getProfilestate()
	{
		return $this->profilestate ;
	}
	
	public function setLastlogoff($lastlogoff)
	{
		$this->lastlogoff = $lastlogoff ;
	}
	public function getLastlogoff()
	{
		return $this->lastlogoff ;
	}
	
	public function setProfileurl($profileurl)
	{
		$this->profileurl = $profileurl ;
	}
	
	public function getProfileurl()
	{
		return $this->profileurl ;
	}
	
	public function setCommentpermission($commentpermission)
	{
		$this->commentpermission = $commentpermission ;
	}
	
	public function getCommentpermission()
	{
		return $this->commentpermission ;
	}
	
	public function setRealname($realname)
	{
		$this->realname = $realname ;
	}
	
	public function getRealname()
	{
		return $this->realname ;
	}
	
		public function setPrimaryclanid($primaryclanid)
	{
		$this->primaryclanid = $primaryclanid ;
	}
	
	public function getPrimaryclanid()
	{
		return $this->primaryclanid ;
	}
	
		public function setTimecreated($timecreated)
	{
		$this->timecreated = $timecreated;
	}
	
	public function getTimecreated()
	{
		return $this->timecreated ;
	}
	
		public function setLoccountrycode($loccountrycode)
	{
		$this->loccountrycode = $loccountrycode ;
	}
	
	public function getLoccountrycode()
	{
		return $this->loccountrycode ;
	}
	
	public function setGameserverip($gameserverip)
	{
		$this->gameserverip = $gameserverip ;
	}
	
	public function getGameserverip()
	{
		return $this->gameserverip ;
	}
	
	public function setLocstatecode($locstatecode)
	{
		$this->locstatecode = $locstatecode ;
	}
	
	public function getLocstatecode()
	{
		return $this->locstatecode ;
	}
	
	public function setGameextrainfo($gameextrainfo)
	{
		$this->gameextrainfo = $gameextrainfo ;
	}
	
	public function getGameextrainfo()
	{
		return $this->gameextrainfo ;
	}
	
	public function setLoccityid($loccityid)
	{
		$this->loccityid = $loccityid ;
	}
	
	public function getLoccityid()
	{
		return $this->loccityid ;
	}
	
	public function setGameid($gameid)
	{
		$this->gameid = $gameid ;
	}
	public function getGameid(){
		return $this->gameid ;
	}

	public function setGameserversteamid($gameserversteamid)
	{
		$this->gameserversteamid = $gameserversteamid ;
	}
	public function getGameserversteamid()
	{
		return $this->gameserversteamid ;
	}
	
	public function setPersonastateflags($personastateflags)
	{
		$this->personastateflags = $personastateflags ;
	}
	public function getPersonastateflags()
	{
		return $this->personastateflags ;
	}
}

			