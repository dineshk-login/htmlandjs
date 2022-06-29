<?php


class studentresultcalculation
			{
				
				function add($a1,$a2,$a3,$a4,$a5) 
					{
						$addition = $a1 + $a2 + $a3 + $a4 + $a5;
						return $addition; 
					}
				function percentage($a1,$a2,$a3,$a4,$a5) 
					{
						$avg = $a1 + $a2 + $a3 + $a4 + $a5;
						$percent = $avg / 5;
						return $percent; 
					}
				function validation($b1,$b2,$b3,$b4,$b5) 
					{
					if($b1>=35 && $b2>=35 && $b3>=35 && $b4>=35 && $b5>=35 ){
							$res= "Pass" ;
					}
						else{
							$res = "Fail";
					 }
						return $res;
					}
			}
		?>