<?php 

class Msg{
	 public function msgContact($val){
	 	if(isset($val)){
	 		switch ($val) {
	 			case 0:
	 				return '<div class="col-md-12 msg-portfolio"><span>Erreur dans mon systeme ☹ mail non envoyé.</span></div>';
	 				break;
	 			case 1:
	 				return '<div class="col-md-12 msg-portfolio"><span>Mail expedié par les flux réseaux ᕕ( ᐛ )ᕗ </span></div>';
	 				break;
	 			default:
	 				return '<div class="col-md-12 msg-portfolio"><span>Erreur dans mon systeme ☹</span></div>';
	 				break;
	 		}
	 		
	 	}
	 }	
}