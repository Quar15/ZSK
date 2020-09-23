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

// porównanie
$x = 1;
$y = 1.0;

if($x == $y){
  echo '$x jest równe $y<br>';
}
else{
  echo '$x nie jest równe $y<br>';
}

echo gettype($x); // integer
echo "<br>";
echo gettype($y); // double

if($x === $y){
  echo '$x jest identyczne $y<br>';
}
else{
  echo '$x nie jest identyczne $y<br>';
}

$x=1;
$y=10;

echo $x <=> $y;
echo "<hr>";

$x=100;
$y=10;

echo $x <=> $y;
echo "<hr>";

$x=10;
$y=10;

echo $x <=> $y;
echo "<hr>";

$x=1;
$x=$x++;
echo $x; // 1
$x=++$x;
echo $x; // 2
$y=$x++;
echo $x; // 3
echo $y; // 2
$y=++$x*2-1;
echo $x; // 4
echo $y; // 7

// operatory rzutowania
// bool, int, float, string, array, object, unset

$test1="123abc4";
$test2=0;
$test3=20;

echo '<br>Typ danych $test1: ', gettype($test1);
$test1=(int)$test1;
echo "<br>$test1";
echo '<br>Typ danych $test1: ', gettype($test1);

echo '<br>Typ danych $test1: ', gettype($test2);
$test2=(bool)$test2;
echo "<br>$test2"; //false
echo '<br>Typ danych $test1: ', gettype($test2);

echo '<br>Typ danych $test1: ', gettype($test3);
$test3=(float)$test3; //double
echo "<br>$test3"; //20
echo '<br>Typ danych $test1: ', gettype($test3);

//rozmiar typu integer
echo PHP_INT_SIZE,"<hr>"; //8 bajtów

// kontrola typów zmiennych
// is_int(), is_float(), is_numeric(), is_bool(), is_string(), is_null()
$x=1;
echo is_int($x);
echo is_float($x);
echo is_numeric($x);
echo is_bool($x);
$y=null;
echo is_null($y);
$w;
echo $y;
echo $w;
// @ - operator ignorowania błędów
echo @gettype($w);


?>
