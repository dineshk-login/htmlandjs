<?php
// access private function outside the class
 class A {
  private function x() {
    $x = 10;
    return $x;
  }
  public function y() {
  //$z = 12;
  //return 10;
 $a = $this->x();
 
  return $a ;
 
  }
}


class B extends A {
  public function y1() {
    echo "the value of x is "; 
  }
}

$B = new B();
//$B->x();
echo $B->y();
?>
 
</body>
</html>
