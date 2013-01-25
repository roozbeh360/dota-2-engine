<?php
/**
 * category library.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */
 
class curLoad{
	
	private $curl_errno , $curl_error ;
	public $raw_response ;
	
	function __construct($query) {

		$ch = curl_init(); 
	    curl_setopt( $ch, CURLOPT_URL, $query ); 
	    @curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true ); 
	    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); 
	    curl_setopt( $ch, CURLOPT_AUTOREFERER, true ); 
	    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); 
	    curl_setopt( $ch, CURLOPT_MAXREDIRS, 5 ); 
	    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 10 ); 
	    $raw_response = curl_exec( $ch ); 
	    $http_response_header = curl_getinfo( $ch ); 
	    $curl_errno = curl_errno($ch); 
	    $curl_error = curl_error($ch); 
	    curl_close($ch); 
	     
		$this->raw_response = $raw_response ;
	}
	
	public function getResponse()
	{
		 return	$this->raw_response ;
	}
	
	public function hasResponse()
	{
		if(strlen($this->raw_response) < 100) return false ;
		else return	true ;
	}
	
	public function getError()
	{
		// reserved for next frame work version
		$curl_errno = $this->curl_errno ; 
        $curl_error = $this->curl_error ; 
		return array($curl_errno,$curl_error);
	}
	
	function __destruct()
	{
		
	}
	
}  
 
   
     
    
    