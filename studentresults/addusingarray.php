<?php
class math
{

   function add($x) 
  {
       //$season =  ($x); 
$sum = "";
//print_r($season);
    foreach ($x as $element) {  
        //echo "$element"; 
       $sum += $element;
        //echo "$sum";  
       // die();
}
//echo $sum;
//die();

//print_r($items);

     // print_r($x);
    //$addition = $x[0]+ $x[1];
  //echo $addition;
    return $sum; 
  }
  //  function multiplication($x) 
  // {
  //    // print_r($x);
  //   $mul = $x[1] * $x[1];
  // //echo $addition;
  //   return $mul; 
  // }
  //  function subtraction($x) 
  // {
  //    // print_r($x);
  //   $sub = $x[2] - $x[1];
  // //echo $addition;
  //   return $sub; 

  // }
}
$args = [1,2,3,4,5,6,5,6,7,8,3]; 
 $obj= new math();
$result=  $obj->add($args);
//$mul=  $obj->multiplication($args);
//$sub=  $obj->subtraction($args);
//$result=  $obj->add($args);
echo "the addition is" . $result."<br>";
//echo "the multiplication is" . $mul. "<br>";
//echo "the subtraction is" . $sub;

?>