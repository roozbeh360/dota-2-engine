dota-2-engine
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
clone project , from command/bash line run :
git clone https://github.com/roozbeh360/dota-2-engine.git dota2engine

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
    static public  $api_key = "B6F432D___your key____956AD8234";
clear 	B6F432D___your key____956AD8234 and write your api key .

thers is some thing l should tell you , still api is down for some reason but test api is on and we can build our applications.
    static public $api_url = "http://api.steampowered.com/" ;
    static public $api_dota_name ="IDOTA2Match_205790";
above lines is api url if you change http to https it will using https portocol to load data and it have more benefits than http like get more data from steam profiles .
IDOTA2Match_205790 is test version of api so when the times come to use it then you should change it to IDOTA2Match_570 .

ok that's it .

usage
======

it's very easy just add engine.php to your php file and load objects .

exp :
require_once 'engine.php' ;

$doProcess = new doProcess();
$match = $doProcess->fetchMatchDetailsById(1455138);
.
.
.



for full documents see documention/index.html


FAQ
=============

it's full implemented ? not still but i am working on it . and it doesn't support EconomySchema api for now .

why cc copyright ? it still need more test and more developers to come so i need to introduce it and get helps .

how about the framework speed ? it's just fine but dota 2 api is not working well 

can i ask questions ? yes contact me on baabakaan@remake.ir .
