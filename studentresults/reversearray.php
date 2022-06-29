<?php
class math
{
    function add($x) 
    { 
        $array= $x;
        $size = sizeof($x);
        for($i=$size-1; $i>=0; $i--){
     $res = $array[$i];
            //echo $res;
            ///return $res;
        }
        return $res;
    }
}
$args = [1,2,3,4,5,6,5,6,7,8,3,2,4,5,6,6]; 
$obj= new math();
$result=  $obj->add($args);
echo "the reversed array is" . $result;
?>