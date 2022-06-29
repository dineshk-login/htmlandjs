<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
		.center {
			text-align: center;
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  background-color: grey;
}
	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<?php $captcha_num = rand(1000, 9999);
$captcha = $captcha_num;?>
<?php  
 include_once("config.php"); 
 if($_POST){
 //$captcha11 = $_POST['captcha1'];
//echo $captcha;
//echo $captcha11;
 	
}
//die();

	if(isset($_POST) & !empty($_POST)){
		if($captcha11 == $captcha){
			echo "correct captcha";
		}else{
			echo "Invalid captcha";
		}
	}
?>
<?php
if ($_POST){
$rollno = $_GET['rollno'];
 $result = mysqli_query($mysqli, "SELECT * FROM results WHERE rollno='".$rollno."' ");
 //$res1 = mysqli_fetch_assoc($result);
  $row=mysqli_fetch_assoc($result);
  if(empty($row)){
  $errormessage = "Enter a valid rollnumber ";
   //header("Location:studentresults.php"); 
	//die();
 }
 else{
 	header("Location:resultportal.php?rollno=".$rollno); 

 }}

?>

<body>
	<center><h1>Students Results</h1></center>
	<div class="center">
<form action="" method="get">

Enter your roll number:<input type="text" name="rollno" id="rollno" onkeyup="rollnovalidate()"><span><?php
if($_GET && empty($row))
{
  echo $errormessage;
}
?></span><br><br>
captcha:<input type="text" name="captcha"  value="<?php echo $captcha; ?>" />
Enter the captcha:<input type="text" name="captcha1"><br>
<input type="submit" name="" value="submit" >
</form></div>
</body>
</html>