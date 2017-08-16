<?php 
	function isValidCard($cardNumber){
		if(!is_numeric($cardNumber)) return false;
		$even=$odd=0;
		for($i=strlen($cardNumber)-1;-1<$i;--$i){			
			if($i%2!=0)
				$odd+=$cardNumber[$i];
			else{
				$mul=($cardNumber[$i]*2);
				if($mul>9)
					$even+= $mul-9;
				else
					$even+=$mul;
			}
			
		}
		return ($odd+$even)%10==0;
	}

	var_dump(isValidCard('712300000100001277'));
	var_dump(isValidCard('4847352989263094'));
	var_dump(isValidCard('4847352989262194'));
 ?>