<?php	
if($_POST){
include_once("config.php");
$rollno=$_POST['rolllno'];
if (!empty($rollno)) {
$check_rollno="SELECT rollno FROM results WHERE rollno= '".$rollno."'";
	//echo $check_email;
	$result=mysqli_query($mysqli,$check_rollno);
	$count=mysqli_num_rows($result);
	//echo "count is >>" . $count;
	if ($count != 1) {
		echo "enter the correct rollno";
		}
	}
}
	?>