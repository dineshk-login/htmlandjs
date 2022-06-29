<?php
if($_POST){
$a=$_POST["table"];
//echo "->".gettype($a)."<-";
//filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT)
if(filter_input(INPUT_POST, "table", FILTER_VALIDATE_INT)
)
{
	$res = ""; 
	for($i=1;$i<=15;$i++)
		{
			$res .= $i."*".$a."=".$i*$a."<br>";
		}
}else{
	$res = "numbers only allowed";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
	<form action="" method="post">
		Enter the table:<input type="text" name="table">
		<input type="submit" name=""><br>
		<?php if(filter_input(INPUT_POST, "table", FILTER_VALIDATE_INT)
){ echo $res;}?>
</form>
</center>
</body>
</html>
