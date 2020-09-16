<?php

  //wersja php
  echo PHP_VERSION, "<br>";

  //echo phpinfo();

// interpolacja
echo "a", "b", "c";//show a, show b, show c - faster
echo "a". "b". "c";//show a+b+c - slowest

//potęgowanie
$power = 2**10;
echo "<br>$power<br>"; //1024

//& and, | or, not ~, xor ^, <<, >>
$bin = 0b1010;
echo "$bin<br>";

$bin = $bin<< 2;
echo "$bin<br>";

$bin = $bin >> 3;
echo "$bin<br>";

?>
