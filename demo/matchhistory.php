<?php

require_once '../engine.php' ; // as default it must always included


if(!isset($_POST['playerName']) && !isset($_GET['playerName'])) {echo 'not found';die();}  

if(isset($_POST['playerName'])) $playerName = $_POST['playerName'] ;
if(isset($_GET['playerName'])) $playerName = $_GET['playerName'] ;
$lastmatchid = null ;
if(isset($_GET['lastmatchid'])) $lastmatchid = $_GET['lastmatchid'] ;
if(isset($_POST['lastmatchid'])) $lastmatchid = $_POST['lastmatchid'] ;

$doProcess = new doProcess();
$matchHistory = $doProcess->fetchMatchHistoryByPlayerName($playerName,$lastmatchid,50) ;

if($matchHistory){
	
	echo '<h4 style="color: white;">Number Of Matchs Founded : ' .$matchHistory->getTotal_results().'.</h4>';
	
$matchs =$matchHistory->getMatches() ;

?>
<table style="width: 100%;">
	<tr style="color: white;font-weight: bold;">
	<td>Match Id</td>	
	<td>Start Time</td>
	<td>Details</td>
	</tr>
												
<?	
$counter = 1 ;
$lastid = '' ;
foreach($matchs as $match)
if($match){
	
	
	if($counter%2==0)  echo '<tr style="background: #464646; ">' ;
	else echo '<tr style="background: #393939;">' ;
	echo '<td style="padding: 5px;">'.$match->getMatch_id().'</td>'.'<td style="padding: 5px;">';
if($match->getStart_time())
		echo gmdate("Y-m-d  H:i:s ", $match->getStart_time());
	else echo gmdate("Y-m-d TH:i:s ", $match->getStarttime());
	
echo '</td>'.'<td style="padding: 5px;"><a class="dte-button morematchdetails" href="matchdetails.php?matchid='.
$match->getMatch_id()
.'">More Details</a></td>' ;
	echo '</tr>' ;
	$lastid = $match->getMatch_id() ;
	$counter = $counter + 1 ;
}

else echo 'not found' ; 
echo '</table>';
echo '<input type="hidden" id="firstmatchid" value="'.$matchs[0]->getMatch_id().'" />' ;
echo '<input type="hidden" class="lastmatchid" value="'.$lastid.'" />' ;
echo '</br>';
}
else echo 'not found' ;
	?>
	
	
	<input type="button" class="dte-button" id="nextmatchhistory" value="next 25 matchs" />
	<script>
$('.morematchdetails').colorbox();

$('#nextmatchhistory').bind('click',function(){
		$("#details").html('searching...'); 
		var playerName = $('.dte-search-match-history-by-player-name').val() ;
		var lastmatchid = '<?php echo $lastid ?>' ;

		$.ajax({url:"matchhistory.php",data: 'playerName='+playerName+'&lastmatchid='+lastmatchid,type: "POST",success:function(result){

   			 	$("#details").html(result);
   			 $('.dte-postheader').html('Match history for  '+playerName) ;
   			 
  		}});
  
	});


	</script>
	
