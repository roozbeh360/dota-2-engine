



 <?php 
 
class slotPosition
{
	private $slot_list = array(
 		"0" => "#2972e3",
         "1" => "#78f4c2",
         "2" => "#b009af",
         "3" => "#dde82a",
         "4" => "#ed771f",
         "128" => "#fa8fbd",
         "129" => "#9db34f",
         "130" => "#6cd5f2",
         "131" => "#087d2f",
         "132" => "#7d5e41",
         );
 
 public  function renderFullPosition($slot,$heroImage,$cssClass)
 {
 	return '<img src="'.$heroImage.'" style="border: 4px solid '.$this->slot_list[$slot].'" class="'.$cssClass.'" /> ' ;
 }

}
 
$slotPosition = new slotPosition() ; 
  
        