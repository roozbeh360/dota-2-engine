dota-2-engine
=============

VERSION 1.4.12 beta
=============

about dota 2 api framework . see demo below and please use latest browsers .
demo : http://dota.remake.ir/
======

this framework based on dota 2 api (http://www.dota2wiki.com/wiki/API) and php language .

this framework built on my extra time so it means it may have a few bug and errors 
but i am working on it still in my free times to stabilized it .
please review license .

install
======
#### clone project 
 from command/bash line run :
 
```php
 git clone https://github.com/roozbeh360/dota-2-engine.git dota2engine  
```
#### or 
 from command/bash line run :

```php
curl -s https://getcomposer.org/installer | php
then 
php composer.phar install
```

first of all you should enable these extentions in php.ini or on your host . 
find these lines and remove ; from beginning . 

;extension=php_curl.dll
;extension=php_gmp.dll
like this :
extension=php_curl.dll
extension=php_gmp.dll

then you must get api key from valve :

http://steamcommunity.com/dev/apikey

at last edit action/config/config.php

```php
    static public  $api_key = "key";
clear 	key and write your api key .
```

#### Do not forget .
    static public $api_url = "http://api.steampowered.com/" ;
    static public $api_dota_name ="IDOTA2Match_205790";
above lines is api url if you change http to https it will using https portocol to load data and it have more benefits than http like get more data from steam profiles .
IDOTA2Match_205790 is test version of api so when the times come to use it then you should change it to IDOTA2Match_570 .

ok that's it .

you can even make it faster by enabling php memCached extention .

http://www.php.net/manual/en/memcached.installation.php

usage
======

it's very easy just add engine.php to your php file and load objects .

exp :
```php
<?php
require_once 'engine.php' ;

$doProcess = new doProcess();
$match = $doProcess->fetchMatchDetailsById(1455138);
if($match){
	if($match->getRadiant_win() ) 
	{
		echo '<h3 align="center" style="color: #92a51b">Radiant win</h3>'; 
	}
	else echo '<h3 align="center" style="color: #c22f19">Dire win</h3>'; 
	
	echo '<h4 style="color: white;" text-align="center">';
	if($match->getStart_time())
		echo gmdate("Y-m-d  H:i:s ", $match->getStart_time());
	else echo gmdate("Y-m-d TH:i:s ", $match->getStarttime());

	echo ' Mode: '.$match->getGame_mode_name().' Duration: '.round(((int)$match->getDuration()/60)).' min'.'</h4>' ;
	
	if($match->getReplay_salt())
	echo '<span style="float: right; font-size: 1.2em;"><a href="'.$match->getMatch_replay().'">Download Replay</a></span>'  ;
}
.
.
.
// you can also see demo directory for more sample
?>
```

### For full documents see documention/index.html .
### Or see core/repository/base/baseMatchDetails.class.php for get* functions you can use .

Api Support
========
|           Type               |                                    URL                                           |
|------------------------------|----------------------------------------------------------------------------------|
|        **Supported**         |                                                                                  |
| GetMatchHistory              | https://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/v001/               |
| GetMatchDetails              | https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/v001/               |
| GetPlayerSummaries           | https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/                |
| GetLeagueListing             | https://api.steampowered.com/IDOTA2Match_570/GetLeagueListing/v0001/             |
| GetHeroes                    | Internal Use can be extended                                                     |
| GetMatchHistoryBySequenceNum | https://api.steampowered.com/IDOTA2Match_570/GetMatchHistoryBySequenceNum/v0001/ |
|       **Unsupported**        |                                                                                  |
| EconomySchema                | https://api.steampowered.com/IEconItems_570/GetSchema/v0001/                     |
|       **In future**
| GetTeamInfoByTeamID          | https://api.steampowered.com/IDOTA2Match_570/GetTeamInfoByTeamID/v001/           |
| GetLiveLeagueGames           | https://api.steampowered.com/IDOTA2Match_570/GetLiveLeagueGames/v0001/           |



FAQ
=============

it's full implemented ? not still but i am working on it . and it doesn't support EconomySchema api for now .

why cc copyright ? it still need more test and more developers to come so i need to introduce it and get helps .

how about the framework speed ? it's just fine but dota 2 api is not working well 

what about dota.remake.ir ? it's just demo file for speed test and functionality review .

can i ask questions or see release news ? https://www.facebook.com/Dota2Engine .


