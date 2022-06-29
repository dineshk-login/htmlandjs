<?php  
$num = 111;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
  echo "rem is" .$rem."<br>";
  //die();
   $sum = $sum + $rem;  
   $num=$num/10; 
   echo "numis". $num ."<br>";
   //die(); 
  }  
 echo "Sum of digits 14597 is" . $sum;  
 ?>  