<?php
include_once("config.php"); 
include_once("resultfunctions.php"); 
if ($_GET){
	$rollno = $_GET['rollno'];
	$result = mysqli_query($mysqli, "SELECT * FROM results WHERE rollno='".$rollno."' ");
	$row=mysqli_fetch_assoc($result);
	if(empty($row)){
		echo "Enter a valid rollnumber ";
		die();
	} else{
			$result1 = mysqli_query($mysqli, "SELECT * FROM results WHERE rollno='".$rollno."' ");
			$res = mysqli_fetch_assoc($result1);
			$a = $res['rollno'];
			$b = $res['name'];
			$c = $res['tamil'];
			$d = $res['english'];
			$e = $res['maths'];
			$f = $res['science'];
			$g = $res['socialscience'];
			$obj= new studentresultcalculation();
			$total=  $obj->add($c,$d,$e,$f,$g);
			$percent = $obj->percentage($c,$d,$e,$f,$g);
			$validate = $obj->validation($c,$d,$e,$f,$g);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">table, th, td {
border: 1px solid black;
}
a{
text-decoration: none;
}
</style>
<meta charset="utf-8">
<title></title>
</head>
<body><center>
<h1>Student Result</h1>
<a href="Studentresults.php"> back</a>
<h3>Welcome <?php echo $b ?></h3>
<table border="3">
<tr>
<td><b> Roll.no</b></td><td><b> Name</b></td><td><b> Tamil</b></td><td><b> English</b></td><td><b> Maths</b></td><td><b> Science</b></td><td><b> Socialscience</b></td><td><b> Total</b></td><td><b> Percentage</b></td><td><b> Pass/Fail</b></td>
<tr>
<td><?php echo $a;?></td><td><?php echo $b;?></td><td><?php echo $c;?></td><td><?php echo $d;?></td><td><?php echo $e;?></td><td><?php echo $f;?></td><td><?php echo $g;?></td><td><?php echo $total;?></td><td><?php echo $percent;?></td><td><?php echo $validate;?></td>
</tr>
</table></center>
</body>
</html> 