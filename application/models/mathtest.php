<?php

class mathtest extends CI_Model{
	public function add($sum,$one){
		echo $sum;
		echo $one;
		for ($i='0' ; $i< $sum ; $i++ ) 
		{	
			$one+=$i;
			echo $i;
		}
		echo $one;
		return $one;	
	}


	

}