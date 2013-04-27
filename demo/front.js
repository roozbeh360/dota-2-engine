$(document).ready(function () {
	
var  generatenoty = function(message,kind) {
  	var n = noty({
  		text: message,
  		type: kind,
      dismissQueue: true,
  		layout: 'top',
  		timeout: true,
  		animation: {
		open: {height: 'toggle'},
		close: {height: 'toggle'},
		easing: 'swing',
		speed: 1400 // opening & closing animation speed
		},
  		theme: 'defaultTheme'
  	});
  	
  }	
	$('.dte-search-match').bind('change',function(){
		generatenoty('searching...','alert'); 
		var matchid = $(this).val() ;
		$.ajax({url:"matchdetails.php",data: 'matchid='+matchid,type: "POST",success:function(result){
			
			if(result.toString().indexOf('not found') > -1)
			{
				 $("#details").html('<h3>NOT FOUND</h3>');
				 generatenoty('NOT FOUND','error'); 
				 $('.dte-postheader').html('Match Details ') ;
				 }
   			 else {
   			 	$("#details").html(result);
   			 generatenoty('match founded','success'); 
   			 $('.dte-postheader').html('Match Details '+matchid) ;
   			 }
  		}});
  
	});
	
	$('.dte-search-match-history-by-player-name').bind('change',function(){
		generatenoty('searching...','alert'); 
		var playerName = $(this).val() ;
		$.ajax({url:"matchhistory.php",data: 'playerName='+playerName,type: "POST",success:function(result){
			
			if(result.toString().indexOf('not found') > -1 || result.toString().indexOf('Fatal error') > -1)
			{
				 $("#details").html('<h3>NOT FOUND</h3>');
				 generatenoty('NOT FOUND','error'); 
				 $('.dte-postheader').html('Match History ') ;
				 }
   			 else {
   			 	$("#details").html(result);
   			 generatenoty('match founded','success'); 
   			 $('.dte-postheader').html('Match history for  '+playerName) ;
   			 }
  		}});
  
	});
	
	
	
});
