<?php 
$output;
if($_POST)  {
	$check = $_POST['input'];
	$res= strrev($check);
	if($res==$check){  
		$output = $check . "is a palindrome ";  
		} 
		else {  
			$output = $check . "  is not a palindrome";  
		}  
}
?>  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body bgcolor="tan">
	<center>
		<form action="" method="post">
		Enter the number or string:<input type="text" name="input" value="<?php if (isset($_POST['input'])) echo $_POST['input']; ?>"> 
		<input type="submit" name="" value="submit">
		</form>
		<table>
			<tr><td><?php if(isset($_POST['input'])){echo $output;}?></td></tr>
		</table>
	</center>
</body>
</html>