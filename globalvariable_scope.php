<?php
 $x = 5; // global scope

function myTest() {
  global $x;
 // $x = 6;
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
//global $x;
function myTest11() {
     static $x;
     $x = 7;
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
//echo "<p>Variable x outside function is:". $x."</p>";

mytest11();
//mytest();
echo $x;

die();
?>


<?php
function myTest1() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is:". $x. "</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>



//The global keyword is used to access a global variable from within a function.

//To do this, use the global keyword before the variables (inside the function):



<?php
$x = 5;
$y = 10;
function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15
?>


<?php
//PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
$x = 5;
$y = 10;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest3();
echo $y; // outputs 15
?>

<?php
function myTest4() {
  static $x = 0;
  echo $x;
  $x++;
}
echo "<br>";
myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();
echo "<br>";

?>
<?php

function myTest5(){
  static $z = 5;
 
  echo $z;
  $z++;
}
echo "<br>";
myTest5();
echo "<br>";
myTest5();
echo "<br>";
myTest5();
?>

