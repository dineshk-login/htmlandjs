<?php

for($number = 1; $number <=10; $number++)
{
$count = 0;//true
for ( $i = 2; $i <= $number/2; $i++ )
{
	//echo$i;
	//echo"<br>".$i;
	//echo$number;
	//echo "i >> ".$i."<br>";
	//die();
if($number%$i == 0) //&number!=true)
{
$count++;
//number=true;
//echo "count>>". $count;
//break;
}
//echo"count is".$count;
}

if( $count == 0 && $number != 1 )
{
echo $number."<br> ";
}
//echo $number;
}
?>
